# 📊 Server Dashboard (Debian 32-bit)

This is a lightweight, custom-built dashboard designed for a home server running Debian 32-bit on an Intel Atom processor. It displays real-time system information and service statuses, tailored for a 10.1" screen with a 1024x600 resolution.

## Key features:
- 🖥️ System resource monitoring (CPU, RAM, disk usage)
- 🌤️ Current weather data
- 💵 Real-time USD exchange rate
- 📡 Service status display for:
  - Pi-hole
  - Plex Media Server
  - Tailscale
  - Nextcloud
  - Navidrome

- 💡 Optimized for minimal performance impact on low-spec hardware

The dashboard is served via Apache2 and built with plain HTML, CSS, and JavaScript—no frameworks or external dependencies—ensuring fast load times and easy maintenance.

## How It Works

The dashboard collects system data and service statuses through simple scripts running on the Debian server. This data is then displayed in real-time using JavaScript on a lightweight HTML page. It refreshes automatically to keep the information up-to-date without needing manual reloads.

## Why It’s Useful

Running on low-spec hardware, this dashboard provides a quick, at-a-glance overview of my server’s health and essential services. It helps me monitor resource usage, check service availability, and stay informed about external factors like weather and currency rates — all from a compact display, saving time and avoiding the need for complex monitoring tools.

![Dashboard Screenshot](Screenshot.png)
