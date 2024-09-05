document.getElementById('startScanner').addEventListener('click', function() {
    var readerElement = document.getElementById('reader');
    var successMessage = document.getElementById('successMessage');

    readerElement.classList.remove('hidden');
    successMessage.classList.add('hidden');

    var html5QrcodeScanner = new Html5Qrcode("reader");

    function onScanSuccess(decodedText, decodedResult) {
        // Log the scanned result
        console.log("Scanned data:", decodedText);

        // Assuming decodedText is a JSON string
        let qrData;
        try {
            qrData = JSON.parse(decodedText);
        } catch (e) {
            console.error("Failed to parse QR code data:", e);
            qrData = { roll_number: 'unknown', name: 'unknown' };
        }

        // Show success message
        successMessage.classList.remove('hidden');
        successMessage.innerText = `QR Code Scanned Successfully! Result: ${JSON.stringify(qrData)}`;

        // Send data to the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "insert_attendance.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log("Server response:", xhr.responseText);
                } else {
                    console.error("Server error:", xhr.statusText);
                }
            }
        };

        xhr.send(JSON.stringify({
            roll_number: qrData.roll_number || 'unknown',
            name: qrData.name || 'unknown',
            timestamp: new Date().toISOString()
        }));

        // Stop the scanner
        html5QrcodeScanner.stop().then(function() {
            readerElement.classList.add('hidden');
        }).catch(function(err) {
            console.error("Failed to stop the scanner", err);
        });
    }

    html5QrcodeScanner.start({ facingMode: "environment" }, { fps: 10, qrbox: 250 }, onScanSuccess)
        .catch(function(err) {
            console.error("Failed to start the scanner", err);
        });
});
