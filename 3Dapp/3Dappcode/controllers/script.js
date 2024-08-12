
$(document).ready(function () {
    let wireframeMode = false; // Ensure this variable is defined at the top

    // Handle model gallery selection
    $("#model-gallery x3d").click(function () {
        const modelId = $(this).find('transform').attr('id').replace('gallery-', '');
        console.log("Model selected:", modelId); // Debugging line
        $("#model-display transform").attr("visible", "false"); // Hide all models
        $(`#${modelId}`).attr("visible", "true"); // Show selected model
        updateModelDescription(modelId);
    });

    // Fetch model description from the database
    function updateModelDescription(modelId) {
        console.log("Fetching description for:", modelId); // Debugging line
        $.ajax({
            url: '../models/get_models_data.php', // Ensure this path is correct
            type: 'GET',
            data: { id: modelId, t: new Date().getTime() }, // Cache busting parameter
            dataType: 'json',
            success: function (data) {
                console.log("Response data:", data); // Log the response data
                if (data.description) {
                    $('#model-description').text(data.description);
                } else {
                    $('#model-description').text('No description available.');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error("AJAX error:", textStatus, errorThrown); // Detailed error logging
                console.error("Response text:", jqXHR.responseText); // Log the response text
                $('#model-description').text('Error loading description.');
            }
        });
    }

    // Toggle wireframe mode
    $("#wireframe-btn").click(function () {
        console.log("Wireframe button clicked"); // Debugging line
        wireframeMode = !wireframeMode;
        const visibleTransforms = $("#model-display transform[visible='true']");
        console.log("Visible Transforms Count:", visibleTransforms.length); // Debugging line

        visibleTransforms.each(function () {
            const originalModel = $(this).find("inline[id$='-original']");
            const wireframeModel = $(this).find("inline[id$='-wireframe']");

            if (wireframeMode) {
                originalModel.attr("visible", "false");
                wireframeModel.attr("visible", "true");
            } else {
                originalModel.attr("visible", "true");
                wireframeModel.attr("visible", "false");
            }
        });
    });

    // Change texture
    $("#texture-btn").click(function () {
        console.log("Texture button clicked"); // Debugging line
        $("#model-display shape appearance material").each(function () {
            const textures = [
                "../assets/coke_texture.jpg", // Replace with actual texture file paths
                "texture2.jpg",
                "texture3.jpg",
                "texture4.jpg"
            ];
            const currentTexture = $(this).find("ImageTexture").attr("url");
            const nextTexture = textures[(textures.indexOf(currentTexture) + 1) % textures.length];
            console.log("Current texture:", currentTexture, "Next texture:", nextTexture); // Debugging line
            $(this).find("ImageTexture").attr("url", nextTexture);
        });
    });

    // Switch to Camera View 1
    $("#view1-btn").click(function () {
        console.log("View 1 button clicked"); // Debugging line
        const camera = document.querySelector("#camera1");
        camera.setAttribute("set_bind", "true");
    });

    // Switch to Camera View 2
    $("#view2-btn").click(function () {
        console.log("View 2 button clicked"); // Debugging line
        const camera = document.querySelector("#camera2");
        camera.setAttribute("set_bind", "true");
    });

    // Toggle lighting
    $("#light-btn").click(function () {
        console.log("Light button clicked"); // Debugging line
        const light = document.querySelector("#main-light");
        const isEnabled = light.getAttribute("on") === "true";
        console.log("Current light state:", isEnabled); // Debugging line
        light.setAttribute("on", isEnabled ? "false" : "true");
    });
});
