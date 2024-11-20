<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STL File Viewer</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        canvas {
            display: block;
        }
    </style>
</head>
<body>
    <script type="module">
        // Import Three.js modules from a CDN
        import * as THREE from 'https://unpkg.com/three@0.128.0/build/three.module.js';
        import { STLLoader } from 'https://unpkg.com/three@0.128.0/examples/jsm/loaders/STLLoader.js';
        import { OrbitControls } from 'https://unpkg.com/three@0.128.0/examples/jsm/controls/OrbitControls.js';

        // Scene setup
        const scene = new THREE.Scene();
        scene.background = new THREE.Color(0xeeeeee);

        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.set(3, 3, 5);

        const renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // Lights
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        scene.add(ambientLight);

        const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
        directionalLight.position.set(1, 1, 1);
        scene.add(directionalLight);

        // OrbitControls
        const controls = new OrbitControls(camera, renderer.domElement);

        // STL Loader
        const loader = new STLLoader();
        loader.load(
            // Replace with the URL to your STL file
            'https://projectluminary.net/assets/media/personal/github/MomentsOfInsanity-2023.stl',
            function (geometry) {
                const material = new THREE.MeshStandardMaterial({ color: 0x007bff });
                const mesh = new THREE.Mesh(geometry, material);
                scene.add(mesh);
            },
            undefined,
            function (error) {
                console.error('Error loading STL file:', error);
            }
        );

        // Animation loop
        function animate() {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        }
        animate();
    </script>
</body>
</html>
