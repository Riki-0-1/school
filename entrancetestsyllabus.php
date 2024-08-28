<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer with Download</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        #pdfViewer {
            width: 100%;
            height: 90vh; /* Slightly less than full viewport to make space for download link */
            border: none;
        }
        .download-link {
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <iframe id="pdfViewer" src="riki_resume_new.pdf"></iframe>
    <div class="download-link">
        <a href="riki_resume_new.pdf" download>Download PDF</a>
    </div>
   

</body>
</html>
