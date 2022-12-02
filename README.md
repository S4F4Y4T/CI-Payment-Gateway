<a name="readme-top"></a>

<div align="center">
  <h3 align="center">CI-Payment</h3>
  <p>Integrate paypal and stripe payment gateway into codeigniter</p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#license">License</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

![Screen Shot][product-screenshot-1]

This is codeigniter application with integrated stripe and paypal payment gateaway

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

This application built on codeigniter mvc framework and official stripe library with a third party paypal library which will be found on application/libraries directory

* [![php][php]][php-url]
* ![codeigniter][ci]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]
* [![JQuery][JQuery.com]][JQuery-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->
## Getting Started

By following the instructions you can run the script on your machine

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/S4F4Y4T/CI-Payment
   ```
2. Changin folder and files permissions 
   ```sh
   sudo find "Your project directory" -type f -exec chmod 644 {} \;
   sudo find "Your project directory" -type d -exec chmod 755 {} \;
   ```
3. Go to application/config directory then open payment.php and set all the configs accordingly from your developer accounts of paypal and stripe

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->
## Usage

After the installation is complete go to the project directory and proceed with the payments. Right now the payment gateway is on test mode to switch it to live change config with live data of your developer account

Here a test card to test stripe gateway on test mode

<p><b>Card number: 4242424242424242</b></p>
<p><b>Exp Month/year: any future date</b></p>
<p><b>CVC: Any 3 digit</b></p>

![Screen Shot][product-screenshot-1]
![Screen Shot][product-screenshot-2]

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[product-screenshot-1]: overview/1.png
[product-screenshot-2]: overview/2.png

[ci]: https://img.shields.io/badge/codeigniter-codeigniter-orange
[php]: https://img.shields.io/badge/php-php-white
[Php-url]: https://www.php.net/
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
