<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Skyline</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three/examples/js/controls/OrbitControls.js"></script>
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
        // Example contribution data: 365 days grouped by weeks (52 weeks x 7 days)
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

            // Contribution grid
            const weeks = 52; // Number of weeks
            const days = 7;  // Days in a week
            const cubeSize = 1;

            // Create gradient for contributions (0 = gray, high = blue)
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

                // Position cubes in grid (x: weeks, y: days, z: height)
                cube.position.x = week - weeks / 2;
                cube.position.y = day - days / 2;
                cube.position.z = Math.max(contribution.count / 2, 0.05);

                scene.add(cube);
            });

            // Add labels for months and weeks
            const addLabel = (text, x, y, z) => {
                const loader = new THREE.FontLoader();
                loader.load('https://threejs.org/examples/fonts/helvetiker_regular.typeface.json', (font) => {
                    const textGeometry = new THREE.TextGeometry(text, {
                        font: font,
                        size: 0.5,
                        height: 0.1
                    });
                    const textMaterial = new THREE.MeshBasicMaterial({ color: 0x000000 });
                    const mesh = new THREE.Mesh(textGeometry, textMaterial);
                    mesh.position.set(x, y, z);
                    scene.add(mesh);
                });
            };

            // Example: Add Month labels
            for (let i = 0; i < 12; i++) {
                addLabel(`Month ${i + 1}`, i * 4 - weeks / 2, -days / 2 - 1, 0);
            }

            camera.position.z = 50;

            // Render loop
            function animate() {
                requestAnimationFrame(animate);
                renderer.render(scene, camera);
            }

            animate();
        }

        // Render the graph
        renderSkyline(contributions);
    </script>
</body>
</html>
