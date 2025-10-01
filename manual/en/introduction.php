<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Introduction - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/introduction.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/introduction.php">
 <link rel="alternate" href="https://www.php.net/manual/en/introduction.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/getting-started.php">
 <link rel="prev" href="https://www.php.net/manual/en/getting-started.php">
 <link rel="next" href="https://www.php.net/manual/en/tutorial.php">

 <link rel="alternate" href="https://www.php.net/manual/en/introduction.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/introduction.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/introduction.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/introduction.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/introduction.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/introduction.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/introduction.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/introduction.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/introduction.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/introduction.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/introduction.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="What is PHP and what can it do?" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Introduction - Manual" />
<meta name="twitter:description" content="What is PHP and what can it do?" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Introduction - Manual" />
<meta itemprop="description" content="What is PHP and what can it do?" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="What is PHP and what can it do?" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="tutorial.php">
          A simple tutorial &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="getting-started.php">
          &laquo; Getting Started        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='getting-started.php'>Getting Started</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/introduction.php' selected="selected">English</option>
            <option value='de/introduction.php'>German</option>
            <option value='es/introduction.php'>Spanish</option>
            <option value='fr/introduction.php'>French</option>
            <option value='it/introduction.php'>Italian</option>
            <option value='ja/introduction.php'>Japanese</option>
            <option value='pt_BR/introduction.php'>Brazilian Portuguese</option>
            <option value='ru/introduction.php'>Russian</option>
            <option value='tr/introduction.php'>Turkish</option>
            <option value='uk/introduction.php'>Ukrainian</option>
            <option value='zh/introduction.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="introduction" class="chapter">
  <div class="info">
   
   <h1 class="title">What is PHP and what can it do?</h1>

  </div>

  <div id="intro-whatis" class="section">
   <div class="info"><h1 class="title">What is PHP?</h1></div>
   <p class="para">
    <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> (recursive acronym for <em>PHP: Hypertext
    Preprocessor</em>) is a widely-used open source general-purpose
    scripting language that is especially suited for web
    development and can be embedded into HTML.
   </p>
   <p class="para">
    Nice, but what does that mean? An example:
   </p>
   <p class="para">
    <div class="example" id="example-1">
     <div class="info"><p><strong>Example #1 An introductory example</strong></p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />    &lt;head&gt;<br />        &lt;title&gt;Example&lt;/title&gt;<br />    &lt;/head&gt;<br />    &lt;body&gt;<br /><br />        <span style="color: #0000BB">&lt;?php<br />            </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Hi, I'm a PHP script!"</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">?&gt;<br /></span><br />    &lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    Instead of lots of commands to output HTML (as seen in C or Perl),
    PHP pages contain HTML with embedded code that does
    <span class="replaceable">something</span> (in this case, output <span class="computeroutput">Hi, I&#039;m a PHP script!</span>).
    The PHP code is enclosed in special <a href="language.basic-syntax.phpmode.php" class="link">start and end processing
    instructions <code class="code">&lt;?php</code> and <code class="code">?&gt;</code></a>
    that allow jumping in and out of <q class="quote">PHP mode.</q>
   </p>
   <p class="para">
    What distinguishes PHP from something like client-side JavaScript
    is that the code is executed on the server, generating HTML which
    is then sent to the client. The client would receive
    the results of running that script, but would not know
    what the underlying code was. A web server can even be configured
    to process all HTML files with PHP, and then there&#039;s no
    way that users can tell that PHP is being used.
   </p>
   <p class="para">
    The best part about using PHP is that it is extremely simple
    for a newcomer, but offers many advanced features for
    a professional programmer. Don&#039;t be afraid to read the long
    list of PHP&#039;s features. With PHP, almost anyone can get up and running and be
    writing simple scripts in no time at all.
   </p>
   <p class="para">
    Although PHP&#039;s development is focused on server-side scripting,
    much more can be done with it. Read on, and see more in the
    <a href="introduction.php#intro-whatcando" class="link">What can PHP do?</a> section,
    or go right to the <a href="tutorial.php" class="link">introductory
    tutorial</a> to jump straight to learning about web programming.
   </p>
  </div>

  <div id="intro-whatcando" class="section">
   <div class="info"><h1 class="title">What can PHP do?</h1></div>
   <p class="para">
    Anything. PHP is mainly focused on server-side scripting,
    so it can do anything any other CGI program can do, such
    as collect form data, generate dynamic page content, or
    send and receive cookies. But PHP can do much more.
   </p>
   <p class="para">
    There are two main areas where PHP scripts are used.
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Server-side scripting. This is the most widely used
       and main target field for PHP. Three things are needed
       to make this work: the PHP parser (CGI or server
       module), a web server, and a web browser. All these can
       run on a local machine in order to just experiment
       with PHP programming. See the
       <a href="install.php" class="link">installation instructions</a>
       section for more information.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Command line scripting. A PHP script can be run
       without any server or browser, only the
       PHP parser is needed to use it this way.
       This type of usage is ideal for scripts regularly
       executed using <strong class="command">cron</strong> (on Unix or macOS) or Task Scheduler (on
       Windows). These scripts can also be used for simple text
       processing tasks. See the section about
       <a href="features.commandline.php" class="link">Command line usage of PHP</a>
       for more information.
      </span>
     </li>
    </ul>
   </p>
   <p class="para">
    PHP can be <a href="install.php" class="link">used</a> on all major operating systems, including
    Linux, many Unix variants (including HP-UX, Solaris and OpenBSD),
    Microsoft Windows, macOS, RISC OS, and probably others.
    PHP also has support for most of the web servers today. This
    includes Apache, IIS, and many others. And this includes any
    web server that can utilize the FastCGI PHP binary, like lighttpd
    and nginx. PHP works as either a module, or as a CGI processor.
   </p>
   <p class="para">
    So with PHP, developers have the freedom of choosing an operating
    system and a web server. Furthermore, they also have the choice
    of using procedural programming or object-oriented
    programming (OOP), or a mixture of them both.
   </p>
   <p class="para">
    PHP is not limited to outputting HTML. PHP&#039;s abilities include
    outputting rich file types, such as images or PDF files, encrypting data,
    and sending emails. It can also output easily any text, such as JSON
    or XML. PHP can autogenerate these files, and save them in the
    file system, instead of printing it out, forming a server-side cache for
    dynamic content.
   </p>
   <p class="para">
    One of the strongest and most significant features in PHP is its
    support for a <a href="refs.database.php" class="link">wide range of databases</a>. 
    Writing a database-enabled web page is incredibly simple using one of
    the database specific extensions (e.g., for <a href="book.mysqli.php" class="link">mysql</a>),
    or using an abstraction layer like <a href="book.pdo.php" class="link">PDO</a>, or connect
    to any database supporting the Open Database Connection standard via the
    <a href="book.uodbc.php" class="link">ODBC</a> extension. Other databases may utilize
    <a href="book.curl.php" class="link">cURL</a> or <a href="book.sockets.php" class="link">sockets</a>,
    like CouchDB.
   </p>
   <p class="para">
    PHP also has support for talking to other services using protocols
    such as LDAP, IMAP, SNMP, NNTP, POP3, HTTP, COM (on Windows) and
    countless others. It can also open raw network sockets and
    interact using any other protocol. PHP has support for the WDDX
    complex data exchange between virtually all Web programming
    languages. Talking about interconnection, PHP has support for
    instantiation of Java objects and using them transparently
    as PHP objects.
   </p>
   <p class="para">
    PHP has useful <a href="refs.basic.text.php" class="link">text processing</a> features,
    which includes the Perl compatible regular expressions (<a href="book.pcre.php" class="link">PCRE</a>),
    and many extensions and tools to <a href="refs.xml.php" class="link">parse and access XML documents</a>.
    PHP standardizes all of the XML extensions on the solid base of <a href="book.libxml.php" class="link">libxml2</a>,
    and extends the feature set adding <a href="book.simplexml.php" class="link">SimpleXML</a>,
    <a href="book.xmlreader.php" class="link">XMLReader</a> and <a href="book.xmlwriter.php" class="link">XMLWriter</a> support.
   </p>
   <p class="para">
    And many other interesting extensions exist, which are categorized both
    <a href="extensions.php" class="link">alphabetically</a> and by <a href="funcref.php" class="link">category</a>.
    And there are additional <a href="install.pecl.intro.php" class="link">PECL extensions</a> that may or may not be documented
    within the PHP manual itself, like <a href="http://xdebug.org/" class="link external">&raquo;&nbsp;XDebug</a>.
   </p>
   <p class="para">
    This page is not enough to list all
    the features and benefits PHP can offer. Read on in
    the sections about <a href="install.php" class="link">installing
    PHP</a>, and see the <a href="funcref.php" class="link">function
    reference</a> part for explanation of the extensions
    mentioned here.
   </p>
  </div>

 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/chapters/intro.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fintroduction%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=introduction&amp;repo=en&amp;redirect=https://www.php.net/manual/en/introduction.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="getting-started.php">Getting Started</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="introduction.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="tutorial.php" title="A simple tutorial">A simple tutorial</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
