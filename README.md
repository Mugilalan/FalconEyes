/* README.md - Project Documentation */
# Rolex 4600 - Live Tracking Tool  
### Features:
✅ **Live GPS Tracking** (Latitude, Longitude, Accuracy)  
✅ **Battery Status Monitoring** (Percentage & Charging State)  
✅ **Camera Capture** (Saves Images Automatically)  

## 📌 How to Install & Run:
1️⃣ **Clone the Repository:**  
   ```bash
   git clone https://github.com/Mugilalan/FalconEyes.git
   cd Rolex4600
   ```
2️⃣ **Start the PHP Server:**  
   ```bash
   php -S 127.0.0.1:8080
   ```
3️⃣ **Open in Browser:**  
   - 🌍 **Live Map:** `http://127.0.0.1:8080/map.html`
   - 📍 **View Logs:** `logs/location_log.txt`
   - 📷 **Saved Images:** `logs/cam_TIMESTAMP.png`

## 🚀 Requirements:
- PHP 7+ (for local server)
- Browser with Location & Camera Access Enabled

## 🔥 How It Works:
- `track.php` saves GPS & battery data in `logs/location_log.txt`.
- `camera.php` captures images & saves them in `logs/`.
- `map.html` updates location on a real-time **interactive map**.

## 🛠️ Future Upgrades:
- **Live Streaming from Camera**
- **Multiple User Tracking System**
- **Stealth Mode for Background Execution**
