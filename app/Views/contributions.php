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
        // Fetch contribution data
        fetch('/contributions/fetch')
            .then(response => response.json())
            .then(data => {
                renderGraph(data);
            })
            .catch(error => console.error('Error fetching data:', error));

        function renderGraph(contributions) {
            // Three.js setup
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            // Create a grid for contributions
            const gridSize = 53; // Approx. 53 weeks
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

            camera.position.z = 50;

            // Render loop
            function animate() {
                requestAnimationFrame(animate);
                renderer.render(scene, camera);
            }

            animate();
        }
    </script>
</body>
</html>
