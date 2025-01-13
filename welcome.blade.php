<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Notifications</title>
    <style>
        .notification {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Notification System</h1>
    <div id="notification" class="notification"></div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        Echo.channel('notifications')
            .listen('NotificationEvent', (event) => {
                const notificationElement = document.getElementById('notification');
                notificationElement.innerHTML = event.message;
                notificationElement.style.display = 'block';
            });
    </script>
</body>
</html>
