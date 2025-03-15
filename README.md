# Iran National Code Validator
A simple PHP function to validate Iranian national ID codes (10-digit numbers) based on the official checksum algorithm.

## Features
- Validates 10-digit Iranian national codes.
- Checks for invalid patterns (e.g., repeated digits like `1111111111`).
- Implements the official checksum logic.

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/ali98ir/iran-national-code-validator.git
	```
	
2. Include the script in your PHP project:
   require_once 'validateIranNationalCode.php';
   
   
## Usage
```php
$nationalCode = "0081251266"; // Example valid code
$result = validateIranNationalCode($nationalCode);

if ($result) {
    echo "Valid national code!";
} else {
    echo "Invalid national code!";
}
```

## Example Output
Code: 0081251266 - Valid
Code: 1234567890 - Invalid
Code: 1111111111 - Invalid
Code: 12345 - Invalid
