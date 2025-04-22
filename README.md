# ucertify_blogs_2
This is my second repo that contains the testing WordPress environment of the uCertify  blogs having the old themes and data.

uCertify WP Blog Theme
A modern, responsive, and feature-rich WordPress blog theme designed for educational and tech-focused content creators. The uCertify-WP-Blog-Theme offers custom blocks, a dynamic Table of Contents (TOC), and seamless social sharing, making it ideal for bloggers, educators, and developers.
Table of Contents

Features
Technologies Used
Installation
Usage
Custom Blocks
Table of Contents
Contributing
License
Contact

Features

Responsive Design: Fully optimized for mobile, tablet, and desktop devices.
Custom Gutenberg Blocks: Includes blocks like CTA, Pricing Table, Tabs, Accordion, and more for enhanced content creation.
Dynamic Table of Contents: Automatically generates TOC from H2-H6 headings, with desktop and mobile support (accordion for mobile).
Social Sharing: Integrated share buttons for LinkedIn, WhatsApp, Instagram, Facebook, and Twitter.
SEO-Friendly: Structured markup and optimized images for better search engine visibility.
Text-to-Speech (TTS): Built-in TTS functionality with male/female voice options and volume controls.
Author Profiles: Rich author cards with social media links and avatars.

Technologies Used

WordPress: Built as a custom WordPress theme.
PHP: For server-side logic and template rendering.
CSS: Custom styles for blocks and responsive layouts.
JavaScript: For dynamic features like TOC accordion and TTS.
Bootstrap: For responsive grid and accordion components.
Boxicons: For icons in TOC and social sharing.
Markdown: For documentation (this README).
Lottie: For loading animations.

Installation
To set up the uCertify-WP-Blog-Theme locally, follow these steps:
Prerequisites

WordPress installation (version 6.0 or higher)
PHP 7.4 or higher
MySQL 5.7 or higher
Web server (e.g., Apache, Nginx)

Steps

Clone the Repository
git clone https://github.com/your-username/uCertify-WP-Blog-Theme.git


Move to WordPress Themes Directory
mv uCertify-WP-Blog-Theme /path/to/wordpress/wp-content/themes/


Activate the Theme

Log in to your WordPress admin panel.
Navigate to Appearance > Themes.
Activate uCertify WP Blog Theme.


Install Dependencies

Ensure Bootstrap and Boxicons are included via CDN in your theme's header or enqueue them in functions.php.

Install the Lottie player library if not already included:
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>




Configure Settings

Go to Settings > Reading and set your blog page.
Customize theme options via the WordPress Customizer.



Usage

Create a Blog Post

In the WordPress editor, create a new post.
Use custom blocks (e.g., Pricing Table, CTA, Tabs) from the block inserter.
Add headings (H2-H6) to auto-generate the TOC.


View the Table of Contents

On desktop, the TOC appears in a sticky sidebar.
On mobile, it’s collapsed in an accordion (click the "Table of Contents" button to expand).


Share Posts

Social share buttons are available on the right sidebar for easy sharing.


Text-to-Speech

Click the headphone icon to listen to the post.
Toggle between male/female voices and adjust volume using the TTS controls.



Example
<!-- Example of a Pricing Table Block -->
<div class="uc-pricing-table-editor">
  <div class="card">
    <h3>Basic Plan</h3>
    <h4>$9.99/month</h4>
    <ul class="list-unstyled">
      <li>Feature 1</li>
      <li>Feature 2</li>
    </ul>
    <a class="components-rich-text" href="#">Subscribe</a>
  </div>
</div>

Custom Blocks
The theme includes the following custom Gutenberg blocks:

uC-Blockquote: Styled blockquotes with footer and citation support.
uC-Table: Responsive tables with add/remove column buttons.
uC-CTA: Call-to-action cards with gradient backgrounds.
uC-Tabs: Tabbed content with dynamic add/remove tabs.
uC-Steps: Step-by-step guides with numbered indicators.
uC-Pricing-Table: Flexible pricing tables with image and feature lists.
uC-Accordion: Collapsible content sections.
uC-Pros-Cons: Pros and cons lists for reviews.
uC-CEO: Author quote blocks with avatars.
uC-Swiper-Section: Carousel-style content sections.
uC-Info-Cards: Card-based information displays.

Each block is styled with modern CSS (e.g., gradients, shadows) and includes editor-friendly controls.
Table of Contents
The TOC is dynamically generated from H2-H6 headings in the post content:

Desktop: Displayed in a sticky sidebar with numbered links.
Mobile: Collapsed in a Bootstrap accordion for space efficiency.
Logic: If no headings are present, the TOC div is not rendered (both desktop and mobile).

Example TOC Output
<aside class="table-of-contents">
  <h3>Table of Contents</h3>
  <ol>
    <li><a href="#heading-1">Introduction</a></li>
    <li><a href="#heading-2">Getting Started</a></li>
  </ol>
</aside>

Contributing
We welcome contributions to improve the uCertify-WP-Blog-Theme! Please follow these steps:

Fork the Repository

Click the "Fork" button on GitHub.


Create a Feature Branch
git checkout -b feature/your-feature


Commit Changes
git commit -m "Add your feature"


Push to Your Fork
git push origin feature/your-feature


Open a Pull Request

Go to the original repository and create a pull request.



Please read our CONTRIBUTING.md for detailed guidelines.
Issue Templates

Use the issue template for bug reports or feature requests.
Provide clear descriptions and reproduction steps.

License
This project is licensed under the MIT License. See the LICENSE file for details.
Contact
For questions or feedback, reach out to:

Email: your-email@example.com
GitHub Issues: Open an issue
Twitter: @your-twitter


Happy Blogging with uCertify WP Blog Theme! 🚀

