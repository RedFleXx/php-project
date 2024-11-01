<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adapter Design Pattern</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <?php
    require 'vendor/autoload.php';

    use Stichoza\GoogleTranslate\GoogleTranslate;

    $selectedLang = isset($_POST['language']) ? $_POST['language'] : 'en';

    function translateContent($text, $targetLang) {
        $tr = new GoogleTranslate();
        $tr->setTarget($targetLang);
        return $tr->translate($text);
    }

    $home = translateContent('Home', $selectedLang);
    $about = translateContent('About', $selectedLang);
    $features = translateContent('Features', $selectedLang);
    $applications = translateContent('Applications', $selectedLang);
    $creator = translateContent('Creator', $selectedLang);
    $adapterPattern = translateContent('The Adapter Design Pattern is a structural design pattern that aims to make interfaces of different classes compatible. It allows two incompatible interfaces to work together without modifying their existing code. The pattern involves creating an adapter class that bridges the gap between the incompatible interfaces. Essentially, the adapter pattern acts as a translator, converting the interface of a class into another interface that a client expects.
     This promotes flexibility and reusability, as it enables existing classes to be used with new systems without altering their code.<br> In practice, the adapter pattern is particularly useful when integrating legacy systems or third-party libraries that have interfaces different from the ones required by the client. Instead of rewriting or extending these classes, which could be complex or impractical, an adapter class is introduced to wrap the original class and provide the expected interface.
      This ensures that the client can interact with the class seamlessly, without being aware of the underlying differences.<br>The adapter pattern can be implemented in two primary ways: class adapters and object adapters. Class adapters use multiple inheritance to adapt one interface to another, while object adapters rely on composition to achieve the same result. Object adapters are generally more flexible and are preferred in most cases, as they allow the adapter to work with subclasses of the adaptee.

One of the key benefits of the adapter pattern is that it promotes the single responsibility principle by separating the interface from the implementation. This means that changes to the interface do not affect the implementation, and vice versa. Additionally, the adapter pattern enhances the open/closed principle, as new functionality can be added by introducing new adapters without modifying existing code.

Real-world examples of the adapter pattern include media players that support various file formats, payment gateways that integrate different payment methods, and data conversion tools that translate data between different formats. In hardware design, adapters such as USB-to-Ethernet adapters enable different devices to connect and work together seamlessly.

However, the adapter pattern does introduce some complexity, as it adds an additional layer of abstraction. This can make the system more difficult to understand and maintain. Additionally, there may be a performance overhead associated with the extra level of indirection introduced by the adapter.

Despite these drawbacks, the adapter pattern remains a valuable tool for software developers, providing a flexible and maintainable way to integrate different systems and interfaces. By using adapters, developers can ensure that their code remains clean, modular, and adaptable to future changes.', $selectedLang);
    $keyComponents = translateContent('Key Components: The interface that the client expects and interacts with. The existing class that has an incompatible interface. The class that implements the Target Interface and translates requests from the client to the Adaptee.', $selectedLang);
    $adapterTypes = translateContent('Types of Adapters: Class Adapter uses multiple inheritance to adapt one interface to another. Object Adapter uses composition to achieve the same result, providing greater flexibility.', $selectedLang);
    $realWorldApplications = [
        'Media Players' => translateContent('Media Players: An adapter can allow a media player to support various audio and video formats by translating different file formats to a common interface.', $selectedLang),
        'Payment Gateways' => translateContent('Payment Gateways: Adapters can enable different payment gateways to work with a unified payment processing interface.', $selectedLang),
        'Data Conversion' => translateContent('Data Conversion: Adapters can be used to convert data from one format to another, enabling compatibility between different data processing systems.', $selectedLang),
        'Web Services' => translateContent('Web Services: Adapters can help integrate legacy systems with modern web services by adapting old protocols to new APIs.', $selectedLang),
        'Device Compatibility' => translateContent('Device Compatibility: In hardware design, adapters allow different devices to connect and work together, such as USB-to-Ethernet adapters.', $selectedLang)
    ];
    $benefits = translateContent('Benefits: Reusability, Interoperability, Flexibility.', $selectedLang);
    $drawbacks = translateContent('Drawbacks: Increased Complexity, Performance Overhead.', $selectedLang);
    $bestPractices = [
        'Lightweight' => translateContent('Ensure the adapter class is lightweight and introduces minimal overhead.', $selectedLang),
        'Documented' => translateContent('Clearly document the adapter’s functionality to avoid confusion for future developers.', $selectedLang),
        'Object Adapter' => translateContent('Use the object adapter approach where possible for greater flexibility.', $selectedLang)
    ];
    ?>

    <header>
        <nav class="navbar">
            <a href="#home"><?php echo $home; ?></a>
            <a href="#about"><?php echo $about; ?></a>
            <a href="#features"><?php echo $features; ?></a>
            <a href="#applications"><?php echo $applications; ?></a>
            <a href="#creator"><?php echo $creator; ?></a>
            <form method="POST" class="language-selector">
                <label for="languages">Language:</label>
                <select id="languages" name="language" onchange="this.form.submit()">
                    <option value="en" <?php if($selectedLang == 'en') echo 'selected'; ?>>English</option>
                    <option value="es" <?php if($selectedLang == 'es') echo 'selected'; ?>>Spanish</option>
                    <option value="tl" <?php if($selectedLang == 'tl') echo 'selected'; ?>>Tagalog</option>
                    <option value="ja" <?php if($selectedLang == 'ja') echo 'selected'; ?>>Japanese</option>
                    <option value="zh" <?php if($selectedLang == 'zh') echo 'selected'; ?>>Chinese</option>
                    <option value="fr" <?php if($selectedLang == 'fr') echo 'selected'; ?>>French</option>
                    <option value="de" <?php if($selectedLang == 'de') echo 'selected'; ?>>German</option>
                    <option value="it" <?php if($selectedLang == 'it') echo 'selected'; ?>>Italian</option>
                    <option value="pt" <?php if($selectedLang == 'pt') echo 'selected'; ?>>Portuguese</option>
                    <option value="ru" <?php if($selectedLang == 'ru') echo 'selected'; ?>>Russian</option>
                </select>
            </form>
        </nav>
    </header>

    <section id="home" class="hero">
    </section>

    <section id="about" class="section about-section">
        <h2><?php echo $about; ?></h2>
        <p><?php echo $adapterPattern; ?></p>
    </section>

    <section id="features" class="section features-section">
        <h2><?php echo $features; ?></h2>
        <div class="features">
            <div class="feature-box">
                <h3><?php echo translateContent('Key Components', $selectedLang); ?></h3>
                <p><?php echo $keyComponents; ?></p>
            </div>
            <div class="feature-box">
                <h3><?php echo translateContent('Types of Adapters', $selectedLang); ?></h3>
                <p><?php echo $adapterTypes; ?></p>
            </div>
            <div class="feature-box">
                <h3><?php echo translateContent('Benefits', $selectedLang); ?></h3>
                <p><?php echo $benefits; ?></p>
            </div>
            <div class="feature-box">
                <h3><?php echo translateContent('Drawbacks', $selectedLang); ?></h3>
                <p><?php echo $drawbacks; ?></p>
            </div>
        </div>
    </section>

    <section id="applications" class="section applications-section">
        <h2><?php echo $applications; ?></h2>
        <div class="applications">
            <?php foreach ($realWorldApplications as $title => $content): ?>
                <div class="application-box">
                    <h3><?php echo translateContent($title, $selectedLang); ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="bestPractices" class="section best-practices-section">
        <h2><?php echo translateContent('Best Practices', $selectedLang); ?></h2>
        <div class="best-practices">
            <?php foreach ($bestPractices as $title => $content): ?>
                <div class="practice-box">
                    <h3><?php echo translateContent($title, $selectedLang); ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="creator" class="section creator-section">
    <h2><?php echo $creator; ?></h2>
    <div class="creators">
        <div class="creator-box">
            <img src="morii.jpg" alt="Creator 1">
            <div class="creator-info">
                <h3>Author</h3>
                <p>Cristian L. Morillo</p>
                <p>3rd Year BSIT</p>
            </div>
        </div>
        <div class="creator-box">
            <img src="ako'.jpg" alt="Creator 2">
            <div class="creator-info">
                <h3>Author</h3>
                <p>Benigno Rodrigo O. Mandras Jr</p>
                <p>3rd Year BSIT</p>
            </div>
        </div>
    </div>
</section>



</body>
</html>
