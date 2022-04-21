# PHP Mailer

This shows the use case of PHPMailer for sending E-Mails via PHP

## Documentation
Start reading at the [GitHub wiki](https://github.com/PHPMailer/PHPMailer/wiki). If you're having trouble, head for [the troubleshooting guide](https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting) as it's frequently updated.

Examples of how to use PHPMailer for common scenarios can be found in the [examples](https://github.com/PHPMailer/PHPMailer/tree/master/examples) folder. If you're looking for a good starting point, we recommend you start with [the Gmail example](https://github.com/PHPMailer/PHPMailer/tree/master/examples/gmail.phps).

To reduce PHPMailer's deployed code footprint, examples are not included if you load PHPMailer via Composer or via [GitHub's zip file download](https://github.com/PHPMailer/PHPMailer/archive/master.zip), so you'll need to either clone the git repository or use the above links to get to the examples directly.

Complete generated API documentation is [available online](https://phpmailer.github.io/PHPMailer/).

You can generate complete API-level documentation by running `phpdoc` in the top-level folder, and documentation will appear in the `docs` folder, though you'll need to have [PHPDocumentor](http://www.phpdoc.org) installed. You may find [the unit tests](https://github.com/PHPMailer/PHPMailer/blob/master/test/PHPMailerTest.php) a good reference for how to do various operations such as encryption.

If the documentation doesn't cover what you need, search the [many questions on Stack Overflow](http://stackoverflow.com/questions/tagged/phpmailer), and before you ask a question about "SMTP Error: Could not connect to SMTP host.", [read the troubleshooting guide](https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting).