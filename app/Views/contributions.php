<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Contributions</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
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
        // Manually define contribution data as JSON
        const contributions = [
            { date: "2024-01-01", count: 5 },
            { date: "2024-01-02", count: 10 },
            { date: "2024-01-03", count: 0 },
            { date: "2024-01-04", count: 3 },
            { date: "2024-01-05", count: 8 },
            { date: "2024-01-06", count: 2 },
            { date: "2024-01-07", count: 7 }
            // Add more days as needed
        ];

        function renderGraph(contributions) {
            // Three.js setup
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            // Create a grid for contributions
            const gridSize = 7; // Weekly grid
            const cubeSize = 1;

            contributions.forEach((day, index) => {
                const geometry = new THREE.BoxGeometry(cubeSize, cubeSize, Math.max(day.count, 0.1)); // Height based on count
                const material = new THREE.MeshBasicMaterial({
                    color: day.count > 0 ? 'blue' : 'gray',
                });
                const cube = new THREE.Mesh(geometry, material);

                // Position the cube
                cube.position.x = (index % gridSize) - gridSize / 2;
                cube.position.y = Math.floor(index / gridSize) - gridSize / 2;
                scene.add(cube);
            });

            camera.position.z = 15;

            // Render loop
            function animate() {
                requestAnimationFrame(animate);
                renderer.render(scene, camera);
            }

            animate();
        }

        // Call the function to render the graph
        renderGraph(contributions);
    </script>
</body>
</html>
