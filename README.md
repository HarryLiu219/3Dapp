# My Coca Cola 3D App

This project is a 3D application showcasing Coca Cola branded models using HTML5, CSS3, X3D, JavaScript, and PHP with a SQLite database.

## Features

- Interactive 3D models of Coca Cola, Fanta, and Sprite bottles.
- Toggle wireframe mode for 3D models.
- Dynamically fetch model descriptions from a SQLite database.
- Responsive design using Bootstrap 4.
- AJAX for asynchronous content updates.
- JSON for data transfer between backend and frontend.
- MVC design pattern implementation.

## Setup Instructions

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/MyCocaCola3DApp.git

   ```

2. Navigate to the project directory:
   cd MyCocaCola3DApp

# Database Setup

1. The SQLite database models.db is included in the /db directory.

2. The database contains a table models with columns id and description.

3. You can update the database entries directly in the models.db file using a SQLite database browser.

4. Ensure you have a local server setup to run PHP. If you don't have one, you can use XAMPP, WAMP, or MAMP.

5. Place the project folder in your server's root directory (e.g., htdocs for XAMPP).

6. Open your web browser and navigate to http://localhost/MyCocaCola3DApp/views/index.php to view the application.

# Directory Structure

/MyCocaCola3DApp
/archives
CocaColaBottleArchive.zip
FantaBottleArchive.zip
SpriteBottleArchive.zip
/db
models.db
/models
coke.x3d
fanta.x3d
sprite.x3d
/views
index.html
/scripts
script.js
/styles
styles.css
get_model_data.php
db_connect.php
README.md

# Usage Instructions

1. 3D Model Gallery: Click on the names in the 3D Model Gallery to view different Coca Cola branded models.

2. Wireframe Mode: Use the "Toggle Wireframe" button to switch between normal and wireframe views of the models.

3. Change Texture: Click the "Change Texture" button to cycle through different textures for the selected model.

4. Camera Views: Use the "Camera View 1" and "Camera View 2" buttons to switch between different camera perspectives.

5. Toggle Lighting: Use the "Toggle Lighting" button to turn the directional light on and off.
