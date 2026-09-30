<!DOCTYPE html>
<html>
<head>

    <title>วิดีโอไวรัล</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no,viewport-fit=cover">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css">
</head>
<body>

<video id="my-video" controls>
    <source src="https://ciio.cloud/videos/video.mp4" type="video/mp4">
    <source src="video.webm" type="video/webm">
    Your browser does not support the video tag.
</video>

<script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
<script>
    const player = new Plyr('#my-video');
</script>

</body>
</html>