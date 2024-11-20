<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Skyline with STL Export</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        canvas {
            display: block;
        }
        #exportButton {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }
        #exportButton:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <button id="exportButton">Download STL</button>
    <script type="module">
        // Import Three.js and utilities
        import * as THREE from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js';
        import { OrbitControls } from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/jsm/controls/OrbitControls.js';
        import { STLExporter } from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/jsm/exporters/STLExporter.js';
        import { FontLoader } from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/jsm/loaders/FontLoader.js';
        import { TextGeometry } from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/jsm/geometries/TextGeometry.js';

        // Example contribution data
        const contributions = Array.from({ length: 365 }, (_, i) => ({
            date: `2024-${Math.ceil((i + 1) / 30).toString().padStart(2, '0')}-${((i % 30) + 1).toString().padStart(2, '0')}`,
            count: Math.floor(Math.random() * 10) // Random contribution counts for example
        }));

        function renderSkyline(contributions) {
            // Scene setup
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            // OrbitControls
            const controls = new OrbitControls(camera, renderer.domElement);
            controls.enableRotate = true;
            controls.enableZoom = true;
            controls.target.set(0, 0, 0);
            controls.update();

            // Contribution grid
            const weeks = 52; 
            const days = 7; 
            const cubeSize = 1;

            const getColor = (count) => {
                const intensity = count / 10; 
                const color = new THREE.Color(`rgb(${255 * (1 - intensity)}, ${255 * (1 - intensity)}, ${255})`);
                return color;
            };

            const cubes = new THREE.Group();
            contributions.forEach((contribution, index) => {
                const week = Math.floor(index / days);
                const day = index % days;

                const geometry = new THREE.BoxGeometry(cubeSize, cubeSize, Math.max(contribution.count, 0.1));
                const material = new THREE.MeshStandardMaterial({ color: getColor(contribution.count) });
                const cube = new THREE.Mesh(geometry, material);

                cube.position.x = week - weeks / 2;
                cube.position.y = day - days / 2;
                cube.position.z = Math.max(contribution.count / 2, 0.05);

                cubes.add(cube);
            });

            scene.add(cubes);

            // Pedestal
            const pedestalGeometry = new THREE.BoxGeometry(weeks + 5, days + 5, 2);
            const pedestalMaterial = new THREE.MeshStandardMaterial({ color: 0x333333 });
            const pedestal = new THREE.Mesh(pedestalGeometry, pedestalMaterial);
            pedestal.position.z = -1.5; 
            scene.add(pedestal);

            // Add text
            const loader = new FontLoader();
            loader.load('https://threejs.org/examples/fonts/helvetiker_regular.typeface.json', (font) => {
                const textGeometry = new TextGeometry('@MomentsOfInsanity - 2023', {
                    font: font,
                    size: 0.5,
                    height: 0.2
                });
                const textMaterial = new THREE.MeshStandardMaterial({ color: 0xffffff });
                const textMesh = new THREE.Mesh(textGeometry, textMaterial);

                textMesh.position.set(-weeks / 2, -days / 2 - 3, 0);
                scene.add(textMesh);
            });

            // Lighting
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
            scene.add(ambientLight);

            const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
            directionalLight.position.set(10, 10, 10);
            scene.add(directionalLight);

            camera.position.set(0, 20, 70);

            // Render loop
            function animate() {
                requestAnimationFrame(animate);
                controls.update();
                renderer.render(scene, camera);
            }

            animate();

            // STL Export Functionality
            document.getElementById('exportButton').addEventListener('click', () => {
                const exporter = new STLExporter();
                const stlString = exporter.parse(scene);

                // Create a blob and download link
                const blob = new Blob([stlString], { type: 'text/plain' });
                const link = document.createElement('a');
                link.style.display = 'none';
                link.href = URL.createObjectURL(blob);
                link.download = 'github_skyline.stl';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        }

        renderSkyline(contributions);
    </script>
</body>
</html>
