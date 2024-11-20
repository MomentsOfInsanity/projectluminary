<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Skyline with Pedestal</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/js/controls/OrbitControls.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/fonts/helvetiker_regular.typeface.json"></script>
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
    <script>
        // Example contribution data
        const contributions = Array.from({ length: 365 }, (_, i) => ({
            date: `2024-${Math.ceil((i + 1) / 30).toString().padStart(2, '0')}-${((i % 30) + 1).toString().padStart(2, '0')}`,
            count: Math.floor(Math.random() * 10) // Random contribution counts for example
        }));

        function renderSkyline(contributions) {
            // Three.js setup
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            // OrbitControls
            const controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableRotate = true;
            controls.enableZoom = true;
            controls.target.set(0, 0, 0);
            controls.update();

            // Contribution grid
            const weeks = 52; // Number of weeks
            const days = 7;  // Days in a week
            const cubeSize = 1;

            const getColor = (count) => {
                const intensity = count / 10; // Normalize count (0-10)
                const color = new THREE.Color(`rgb(${255 * (1 - intensity)}, ${255 * (1 - intensity)}, ${255})`);
                return color;
            };

            contributions.forEach((contribution, index) => {
                const week = Math.floor(index / days); // Week index
                const day = index % days; // Day index within the week

                const geometry = new THREE.BoxGeometry(cubeSize, cubeSize, Math.max(contribution.count, 0.1));
                const material = new THREE.MeshBasicMaterial({ color: getColor(contribution.count) });
                const cube = new THREE.Mesh(geometry, material);

                // Position cubes in grid
                cube.position.x = week - weeks / 2;
                cube.position.y = day - days / 2;
                cube.position.z = Math.max(contribution.count / 2, 0.05);

                scene.add(cube);
            });

            // Create a pedestal
            const pedestalGeometry = new THREE.BoxGeometry(weeks + 5, days + 5, 2);
            const pedestalMaterial = new THREE.MeshBasicMaterial({ color: 0x333333 });
            const pedestal = new THREE.Mesh(pedestalGeometry, pedestalMaterial);
            pedestal.position.z = -1.5; // Position slightly below the grid
            scene.add(pedestal);

            // Add text for username and year
            const loader = new THREE.FontLoader();
            loader.load('https://threejs.org/examples/fonts/helvetiker_regular.typeface.json', (font) => {
                const textGeometry = new THREE.TextGeometry('@MomentsOfInsanity - 2023', {
                    font: font,
                    size: 0.5,
                    height: 0.2
                });
                const textMaterial = new THREE.MeshBasicMaterial({ color: 0xffffff });
                const textMesh = new THREE.Mesh(textGeometry, textMaterial);

                // Center the text on the pedestal
                textMesh.position.set(-weeks / 2, -days / 2 - 3, 0); // Adjust text position
                scene.add(textMesh);
            });

            camera.position.set(0, 20, 70); // Set initial camera position

            // Render loop
            function animate() {
                requestAnimationFrame(animate);

                // Update controls
                controls.update();

                // Render the scene
                renderer.render(scene, camera);
            }

            animate();
        }

        // Render the graph
        renderSkyline(contributions);
    </script>
</body>
</html>
