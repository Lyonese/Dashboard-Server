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

- 
The dashboard fetches system data from a PHP script (SystemStatus.php) that collects information about CPU usage, temperature, RAM usage, disk usage, and network speeds. This data is then displayed in the dashboard.

- 
The dashboard uses the Open-Meteo API to fetch current weather data and a 5-day forecast. The weather data includes temperature, weather codes, and descriptions. The weather codes are mapped to corresponding icons and descriptions for display.

- 
The dashboard checks the status of various services (Pi-hole, Tailscale, Plex, Nextcloud, Navidrome) by fetching data from the SystemStatus.php script. The status of each service is displayed with an icon indicating whether the service is active or inactive.

## Why It’s Useful

Running on low-spec hardware, this dashboard provides a quick, at-a-glance overview of my server’s health and essential services. It helps me monitor resource usage, check service availability, and stay informed about external factors like weather and currency rates — all from a compact display, saving time and avoiding the need for complex monitoring tools.

- 
The dashboard provides a comprehensive overview of the server's status, including system performance, weather information, and service statuses. This allows for quick and easy monitoring of the server's health and performance.

- 
The dashboard features a user-friendly interface with clear and concise information. The use of icons and color-coding makes it easy to quickly assess the status of various components.

- 
The dashboard updates in real-time, providing the most current information about the server's status. This ensures that any issues can be quickly identified and addressed.

- 
The dashboard can be easily customized to include additional services or information as needed. The modular design makes it easy to add or remove components.
## Screenshot
![Dashboard Screenshot](Screenshot.png)

- 
Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.
