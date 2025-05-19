# 📊 Server Monitoring Interface (Debian 32-bit)

This is a lightweight, custom-built monitoring interface designed for a home server running Debian 32-bit on an Intel Atom processor. It's optimized for a 10.1" display with a resolution of 1024x600 and provides real-time insights into system performance and service availability.

## ✨ Features

- 🖥️ **System Metrics Overview**
  - CPU usage and temperature
  - RAM and disk usage
  - Network upload/download speeds

- 🌤️ **Weather Integration**
  - Current conditions and 5-day forecast via Open-Meteo API
  - Interprets weather codes into meaningful icons and descriptions

- 💵 **Live Exchange Rate**
  - Real-time USD currency conversion display

- 📡 **Service Health Monitoring**
  - Checks and displays the status of:
    - Pi-hole
    - Plex Media Server
    - Tailscale
    - Nextcloud
    - Navidrome

- ⚙️ **Performance-Oriented Design**
  - Fully static HTML/CSS/JS with no frameworks
  - Minimal resource usage, ideal for low-spec hardware

## 🧠 How It Works

The interface is powered by background scripts that gather system and service data, processed through a lightweight `SystemStatus.php` backend. The information is rendered on a dynamically updating HTML page using JavaScript.

- **System Info** is fetched from `SystemStatus.php`, including CPU, memory, disk, and network stats.
- **Weather Data** is pulled from the Open-Meteo API and translated into user-friendly visuals.
- **Service Checks** display each monitored service's status with color-coded icons for clarity.
- **Auto-refreshing UI** ensures data is always current without needing manual reloads.

## 💡 Why It’s Useful

Designed for low-powered machines, this web-based control panel provides:

- A clear and instant overview of system performance
- Fast identification of service outages or abnormal behavior
- Weather and currency information at a glance
- A modular and easily extensible codebase
- Clean, icon-based UI optimized for small displays
- Hassle-free operation with no dependencies

## 📸 Screenshot

<p align="center">
  <img src="Screenshot.png" alt="Server Dashboard Screenshot" width="700"/>
</p>

## 🤝 Contributions

Contributions are welcome! Feel free to open an issue or submit a pull request with improvements, feature suggestions, or bug fixes.
