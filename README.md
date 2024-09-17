# PHP XAMPP Runner Extension

A Visual Studio Code extension to run PHP files on a XAMPP local server.

## Features

- Open `.php` or `.html` files in the default browser.

## Requirements

- XAMPP installed and running.
- Visual Studio Code installed.

## Installation

1. **Open Visual Studio Code**.
2. **Open the Extensions View** by clicking on the Extensions icon in the Activity Bar on the side of the window or by pressing `Ctrl+Shift+X`.
3. **Search for `php-xampp-runner`** in the Extensions view search bar.
4. **Click Install** next to the extension in the search results.
5. **Reload VSCode** if prompted.

## Configuration

1. **Set PHP Executable Path**:
   - Open VSCode settings (`Ctrl+,`).
   - Search for `php.executablePath` and set it to the path of your PHP executable, typically `C:\\xampp\\php\\php.exe`.

2. **Configure XDebug (Optional, for Debugging)**:
   - Open `php.ini` (located in `C:\xampp\php\php.ini`).
   - Add the following lines:
     ```ini
     [XDebug]
     zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
     xdebug.mode = debug
     xdebug.start_with_request = yes
     xdebug.client_port = 9003
     ```

## Usage

1. **Open in Default Browser**:
   - Right-click on a `.php` or `.html` file in the VSCode explorer.
   - Select `Open in Default Browser` from the context menu.
   - Ensure your XAMPP server is running and the document root is set to your workspace folder.

2. **Place Your Project Folder in `htdocs`**:
   - Move your project folder inside the `htdocs` directory of your XAMPP installation. For example, if your project folder is named `my_project`, it should be located at `C:\xampp\htdocs\my_project`.
   - This ensures that your PHP files are accessible via `http://localhost/your_project_folder/your_file.php`.

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgements

- XAMPP
- Visual Studio Code
- Node.js

## Contribution

Feel free to contribute or report issues to the repository. We're always looking to improve and expand the examples provided.
https://github.com/tirotir-ir/php-xampp-runner.git

---

Happy coding with PHP!
