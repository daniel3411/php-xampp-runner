# PHP XAMPP Runner Extension

A Visual Studio Code extension to run PHP files on a XAMPP local server.

## Features

- Run PHP files directly from VSCode.
- View output in the VSCode terminal.
- Debug PHP files using XDebug.

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

1. **Run PHP File**:
   - Open a PHP file in VSCode.
   - Run the command `Run PHP File` from the Command Palette (`Ctrl+Shift+P`).

2. **Add a Keyboard Shortcut**:
   - Open Keyboard Shortcuts (`Ctrl+K Ctrl+S`).
   - Search for `Run PHP File`.
   - Click on the `+` icon next to the command.
   - Press the key combination you want to use (e.g., `Ctrl+Alt+R`).
   - Press `Enter` to confirm.

2. **Debug PHP File**:
   - Set breakpoints in your PHP file by clicking in the gutter next to the line numbers.
   - Press `F5` to start debugging.
   - Open your browser and navigate to the URL of your PHP file (e.g., `http://localhost/your_project_folder/your_file.php`).

**License**:
This project is licensed under the MIT License - see the LICENSE file for details.

**Acknowledgements**:
  - XAMPP
  - Visual Studio Code
  - Node.js

## Contribution

Feel free to contribute or report issues to the repository. We're always looking to improve and expand the examples provided.
https://github.com/tirotir-ir/php-xampp-runner.git

---

Happy coding with PHP!
