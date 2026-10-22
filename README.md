<div align="center">

# Salavat Counter Bot
# 📿

### A Telegram bot that counts salavat

A small PHP bot for Telegram. Tap a button, the count goes up, and the same message shows the new total.

<br>

# 👨‍💻 **Sadra Hatami**

### *Developer • Software Engineer • Creator*

<br>

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Telegram](https://img.shields.io/badge/Telegram-Bot-26A5E4?style=for-the-badge&logo=telegram&logoColor=white)](https://core.telegram.org/bots/api)
[![Webhook](https://img.shields.io/badge/Mode-Webhook-2C3E50?style=for-the-badge)](https://core.telegram.org/bots/api#setwebhook)
[![Inline](https://img.shields.io/badge/Keyboard-Inline-1ABC9C?style=for-the-badge)](https://core.telegram.org/bots/api#inlinekeyboardmarkup)
[![Persian](https://img.shields.io/badge/Language-Persian-success?style=for-the-badge)](https://en.wikipedia.org/wiki/Persian_language)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](https://opensource.org/license/mit)
[![Open Source](https://img.shields.io/badge/Open_Source-Project-black?style=for-the-badge&logo=github)](https://opensource.org/)

<br>

[🌐 GitHub Profile](https://github.com/sadra-hatami)
•
[📧 Email](mailto:sadra.hatami.1732@gmail.com)

</div>

---

# 📑 Table of Contents

- [About](#-about)
- [Why This Project?](#-why-this-project)
- [Key Features](#-key-features)
- [Project Structure](#-project-structure)
- [Technologies](#️-technologies)
- [Setup](#-setup)
- [Usage](#️-usage)
- [Notes](#-notes)
- [Related Bots](#-related-bots)
- [Contact](#-contact)
- [License](#-license)
- [Support](#-support)

---

# 📖 About

**Salavat Counter Bot** is a Telegram bot written in PHP.

A user opens the chat and gets an inline button. Each tap answers the callback, raises the count, and edits the same message with the new total. The count is carried in the button data, so there is no database.

> **Tagline:** *A Telegram salavat counter with an inline button and a live total.*

The current repository name, `Sraises-Counter`, does not describe the bot. **Salavat-Counter-Bot** is the clearer name.

---

# 🚀 Why This Project?

A counter bot is a clean place to practice Telegram callbacks.

This one keeps that path short:

- One webhook file
- An inline button
- A running total in the message
- Persian text for the user

It is a small bot, not a website.

---

# ✨ Key Features

- 📿 Inline button to send a salavat
- 🔢 Live count in the edited message
- 💬 Persian replies
- 🔐 Token placeholder, not a real key
- 💻 One PHP file

---

# 📁 Project Structure

```text
Salavat-Counter-Bot/
├── index.php
└── README.md
```

`index.php` is the webhook. Put your bot token in `API_KEY` before you deploy it.

---

# 🛠️ Technologies

- PHP
- Telegram Bot API
- cURL
- Inline keyboard

---

# 🚀 Setup

1. Create a bot with BotFather and copy the token.
2. In `index.php`, replace `CHANGE_THIS` with that token.
3. Put `index.php` on a PHP host with HTTPS.
4. Set the webhook:

```text
https://api.telegram.org/bot<TOKEN>/setWebhook?url=https://your-domain/index.php
```

Do not commit a real token.

---

# ▶️ Usage

1. Open the bot in Telegram.
2. Send any message.
3. Tap the salavat button.
4. The message updates with the new count.

---

# 📝 Notes

- The count lives in the button data. Restarting the host does not need a database, and a new message starts again.
- `API_KEY` in the repository is the placeholder `CHANGE_THIS`.
- Related Telegram work lives in the bot list below.

---

# 🤖 Related Bots

| Repository | Role |
|---|---|
| **[Salavat Counter Bot](https://github.com/sadra-hatami/Salavat-Counter-Bot)** | This bot |
| **[World War Bot](https://github.com/sadra-hatami/World-War-Bot)** | Strategy bot |
| **[Rubika Group Bot](https://github.com/sadra-hatami/Rubika-Group-Bot)** | Group bot |
| **[Camera Alert Bot](https://github.com/sadra-hatami/Camera-Alert-Bot)** | Camera alert bot |

---

# 📬 Contact

**Developer:**

### Sadra Hatami

📧 [Email](mailto:sadra.hatami.1732@gmail.com)

🌐 [GitHub](https://github.com/sadra-hatami)

---

# 📄 License

This project is licensed under the **MIT License**.

---

# ⭐ Support

If this counter is useful as a portfolio sample, please consider giving it a ⭐ on GitHub.

---

<div align="center">

## Designed & Developed with ❤️ for the developer community of Iran and the world by **Sadra Hatami**

</div>
