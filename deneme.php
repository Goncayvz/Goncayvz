<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sağlıklı Yaşam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem;
            text-align: center;
            font-size: 1.5rem;
        }

        .container {
            max-width: 600px;
            margin: 2rem auto;
            background-color: #fff;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .write-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .post-area {
            display: none;
            margin-top: 1rem;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 0.5rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            resize: none;
        }

        .share-btn {
            margin-top: 0.5rem;
            padding: 0.5rem 1rem;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .actions {
            margin-top: 1rem;
            display: flex;
            gap: 1rem;
        }

        .actions button {
            background-color: #eee;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            cursor: pointer;
        }

        .comment-section {
            display: none;
            margin-top: 1rem;
        }

        .comment-section input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<header>Sağlıklı Yaşam</header>

<div class="container">
    <div class="toolbar">
        <span>Merhaba, Kullanıcı!</span>
        <button class="write-btn" onclick="togglePostArea()">🖊️</button>
    </div>

    <div class="post-area" id="postArea">
        <textarea placeholder="Bugün ne paylaşmak istersiniz?"></textarea>
        <button class="share-btn">Paylaş</button>
    </div>

    <div class="actions">
        <button onclick="alert('Beğenildi 👍')">👍 Beğen</button>
        <button onclick="toggleComment()">💬 Yorum Yap</button>
    </div>

    <div class="comment-section" id="commentSection">
        <input type="text" placeholder="Yorumunuzu yazın...">
    </div>
</div>

<script>
    function togglePostArea() {
        const area = document.getElementById('postArea');
        area.style.display = area.style.display === 'block' ? 'none' : 'block';
    }

    function toggleComment() {
        const comment = document.getElementById('commentSection');
        comment.style.display = comment.style.display === 'block' ? 'none' : 'block';
    }
</script>

</body>
</html>
