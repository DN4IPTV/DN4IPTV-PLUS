<!DOCTYPE html>
<html lang="en">
<head>
  <script src="dn4iptvplusSECURITY.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Token - DN4IPTV+</title>
  <style>
    body {
      background-color: #0d1117;
      color: #c9d1d9;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
    }

    .container {
      background-color: #161b22;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px #00000050;
      max-width: 400px;
      width: 100%;
    }

    h2 {
      margin-top: 0;
      font-size: 24px;
      color: #58a6ff;
      text-align: center;
    }

    label {
      display: block;
      margin-top: 20px;
      font-weight: 600;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      background-color: #0d1117;
      border: 1px solid #30363d;
      color: #c9d1d9;
      border-radius: 6px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      margin-top: 25px;
      background-color: #238636;
      border: none;
      color: white;
      padding: 10px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #2ea043;
    }

    .footer {
      margin-top: 30px;
      text-align: center;
      font-size: 12px;
      color: #8b949e;
    }

    .footer a {
      color: #58a6ff;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .container {
        padding: 20px;
      }

      h2 {
        font-size: 20px;
      }

      input[type="text"], button {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🎟️ Generate IPTV Access Token</h2>
    <form action="generate.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" required>

      <label for="expires">Expiry Time:</label>
      <input type="text" name="expires" value="2025-04-20 23:59:00" required>

      <button type="submit">Generate Token</button>
    </form>
    <div class="footer">
      DN4IPTV+ &mdash; <a href="https://github.com/DN4IPTV">View GitHub</a>
    </div>
  </div>
</body>
</html>
