<!DOCTYPE html>
<html>

<head>
    <title>Battery Status API Example</title>
    <script>
window.onload = function() {
    function updateBatteryStatus(battery) {
        document.querySelector('#charging').textContent = battery.charging ? 'charging' : 'not charging';
        document.querySelector('#level').textContent = battery.level;
        document.querySelector('#dischargingTime').textContent = battery.dischargingTime / 60;
    }

            navigator.getBattery().then(function(battery) {
                // Update the battery status initially when the promise resolves ...
                updateBatteryStatus(battery);

                // .. and for any subsequent updates.
                battery.onchargingchange = function() {
                    updateBatteryStatus(battery);
                };

                battery.onlevelchange = function() {
                    updateBatteryStatus(battery);
                };

                battery.ondischargingtimechange = function() {
                    updateBatteryStatus(battery);
                };
            });
        };
    </script>
</head>
<style>
    
</style>
<body>
    <div id="charging">(charging state unknown)</div>
    <div id="level">(battery level unknown)</div>
    <div id="dischargingTime">(discharging time unknown)</div>
</body>

</html>