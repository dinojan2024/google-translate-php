# google-translate-php
This is a simple example demonstrating how to use the <b>stichoza/google-translate-php</b> library along with the Google Cloud Translate API to translate text from one language to another in a PHP application.<br>
<h2>Getting Started</h2>
<h3>1.Install Dependencies</h3>
Use <a href="https://getcomposer.org/" taget="_blank">Composer</a> to install the required packages.
<code>composer require google/cloud-translate
composer require stichoza/google-translate-php</code>
This will create a <b>vendor</b> directory containing the necessary files.<br>
<h3>2.Configure Google Cloud Translate API</h3>
Before using the  Google Cloud Translate API, you need to set up a project in the <a href="https://console.cloud.google.com/" taget="_blank">Google Cloud Console</a>. Create API credentials and enable the Translate API. Obtain the API key or credentials file and make sure it has the necessary permissions.
Update <b>transalation.php</b> with your Google Cloud credentials.

<h3>3.Usage</h3>
-> Open <b>index.php</b> in a web browser.<br>
-> Enter a text in the "Translate name" input field.<br>
-> The translated text will be automatically filled in the "Item Name" input field.<br>
<br>
<h3>Folder Structure</h3>
<br>
-> <b>vendor/</b>: Contains Composer dependencies.<br>
-> <b>index.php</b>: The main HTML form and JavaScript for handling the AJAX request.<br>
-> <b>transalation.php</b>: PHP script for handling the translation using Google Cloud Translate API and stichoza/google-translate-php.<br>
-> <b>README.md</b>: Documentation for the project.<br>
<br>
<h3>Important Notes</h3>
-> Make sure to secure and keep your Google Cloud credentials confidential.<br>
-> Handle errors appropriately in your production code.<br>
-> This example uses <b>stichoza/google-translate-php</b> for simplicity. In a production environment, you may want to consider using the official Google Cloud client library for PHP.<br>
<h3>Contributions</h3>
Feel free to contribute to this project by creating issues or pull requests. Your feedback and suggestions are welcome.

