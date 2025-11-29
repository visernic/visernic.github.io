/**
 * vCard Generation Module
 * Handles the creation of the .vcf file blob for download.
 */

export function initVCard() {
    const downloadButton = document.getElementById('downloadVcardBtn');
    
    if (downloadButton) {
        // vCard data string for Visernic Limited
        const vCardData = `BEGIN:VCARD
VERSION:3.0
N:Limited;Visernic;;;
FN:Visernic Limited
ORG:Visernic Limited
TEL;TYPE=WORK,VOICE:+447577062211
EMAIL:contact@visernic.com
EMAIL:support@visernic.com
ADR;TYPE=WORK:;;Nazipur;Nagaon;6540;Bangladesh
END:VCARD`;

        try {
            // Create a Blob from the vCard string
            const blob = new Blob([vCardData], { type: 'text/vcard;charset=utf-8' });
            // Create a URL for the Blob
            const url = URL.createObjectURL(blob);
            // Set the download button's href to this new URL
            downloadButton.href = url;
        } catch (e) {
            console.error("vCard creation failed.", e);
            if(downloadButton) downloadButton.style.display = 'none';
        }
    }
}
