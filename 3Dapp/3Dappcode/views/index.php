<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>My Coca Cola Brand 3D App</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.x3dom.org/release/x3dom.js"></script>
    <link rel="stylesheet" href="https://www.x3dom.org/release/x3dom.css" />
</head>
<body>
    <header>
        <div class="logo">
            <h1>My Coca Cola Brand</h1>
            <p><i>Kill your taste with chilled coca!!!</i></p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <aside>
            <h2>3D Model Gallery</h2>
            <div id="model-gallery">
                <x3d width="100px" height="100px">
                    <scene>
                        <transform id="gallery-cokeModel" translation="0 0 0" scale="1 1 1">
                            <inline url="../assets/coke.x3d"></inline>
                        </transform>
                    </scene>
                </x3d>
                <x3d width="100px" height="100px">
                    <scene>
                        <transform id="gallery-fantaModel" translation="0 0 0" scale="1 1 1">
                            <inline url="../assets/fanta.x3d"></inline>
                        </transform>
                    </scene>
                </x3d>
                <x3d width="100px" height="100px">
                    <scene>
                        <transform id="gallery-spriteModel" translation="0 0 0" scale="1 1 1">
                            <inline url="../assets/sprite_bottle.x3d"></inline>
                        </transform>
                    </scene>
                </x3d>
            </div>
        </aside>
        <section id="model-display">
            <x3d width="600px" height="400px">
                <scene>
                    <transform id="cokeModel" translation="0 0 0" scale="1 1 1" visible="true">
                        <inline id="cokeModel-original" url="../assets/coke.x3d"></inline>
                        <inline id="cokeModel-wireframe" url="../assets/coke_wireframe.x3d" visible="false"></inline>
                    </transform>
                    <transform id="fantaModel" translation="0 0 0" scale="1 1 1" visible="false">
                        <inline id="fantaModel-original" url="../assets/fanta.x3d"></inline>
                        <inline id="fantaModel-wireframe" url="../assets/fanta_wireframe.x3d" visible="false"></inline>
                    </transform>
                    <transform id="spriteModel" translation="0 0 0" scale="1 1 1" visible="false">
                        <inline id="spriteModel-original" url="../assets/sprite_bottle.x3d"></inline>
                        <inline id="spriteModel-wireframe" url="../assets/sprite_wireframe.x3d" visible="false"></inline>
                    </transform>
                    <viewpoint id="camera1" position="0 0 10"></viewpoint>
                    <viewpoint id="camera2" position="0 0 20"></viewpoint>
                    <directionalLight id="main-light" on="true"></directionalLight>
                </scene>
            </x3d>
        </section>
        <section id="controls">
            <button id="wireframe-btn">Toggle Wireframe</button>
            <button id="texture-btn">Change Texture</button>
            <button id="view1-btn">Camera View 1</button>
            <button id="view2-btn">Camera View 2</button>
            <button id="light-btn">Toggle Lighting</button>
        </section>
        <section id="description">
            <h2>Model Description</h2>
            <p id="model-description">Select a model to view its description.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 My Coca Cola Brand. All rights reserved.</p>
        <nav>
            <ul>
                <li><a href="#sitemap">Site Map</a></li>
                <li><a href="#references">References</a></li>
                <li><a href="https://github.com/your-github-repo">GitHub</a></li>
            </ul>
        </nav>
    </footer>
    <script src="../controllers/script.js"></script>
</body>
</html>
