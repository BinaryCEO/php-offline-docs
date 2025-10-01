<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installing/Configuring - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/imagick.setup.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imagick.setup.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imagick.setup.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.imagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/intro.imagick.php">
 <link rel="next" href="https://www.php.net/manual/en/imagick.requirements.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imagick.setup.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imagick.setup.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imagick.setup.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imagick.setup.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imagick.setup.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imagick.setup.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imagick.setup.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imagick.setup.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imagick.setup.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imagick.setup.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imagick.setup.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installing/Configuring" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installing/Configuring - Manual" />
<meta name="twitter:description" content="Installing/Configuring" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installing/Configuring - Manual" />
<meta itemprop="description" content="Installing/Configuring" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installing/Configuring" />

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
        <a href="imagick.requirements.php">
          Requirements &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intro.imagick.php">
          &laquo; Introduction        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      </ul>
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
            <option value='en/imagick.setup.php' selected="selected">English</option>
            <option value='de/imagick.setup.php'>German</option>
            <option value='es/imagick.setup.php'>Spanish</option>
            <option value='fr/imagick.setup.php'>French</option>
            <option value='it/imagick.setup.php'>Italian</option>
            <option value='ja/imagick.setup.php'>Japanese</option>
            <option value='pt_BR/imagick.setup.php'>Brazilian Portuguese</option>
            <option value='ru/imagick.setup.php'>Russian</option>
            <option value='tr/imagick.setup.php'>Turkish</option>
            <option value='uk/imagick.setup.php'>Ukrainian</option>
            <option value='zh/imagick.setup.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imagick.setup" class="chapter">
 <h1 class="title">Installing/Configuring</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="imagick.requirements.php">Requirements</a></li><li><a href="imagick.installation.php">Installation</a></li><li><a href="imagick.configuration.php">Runtime Configuration</a></li></ul>


 
 
 

 
 
 

 






</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/setup.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimagick.setup%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imagick.setup&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.setup.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119084">  <div class="votes">
    <div id="Vu119084">
    <a href="/manual/vote-note.php?id=119084&amp;page=imagick.setup&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119084">
    <a href="/manual/vote-note.php?id=119084&amp;page=imagick.setup&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119084" title="81% like this...">
    1457
    </div>
  </div>
  <a href="#119084" class="name">
  <strong class="user"><em>Ian Co</em></strong></a><a class="genanchor" href="#119084"> &para;</a><div class="date" title="2016-03-30 05:30"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119084">
<div class="phpcode"><code><span class="html">Steps to Install ImageMagick on UwAmp for Windows:<br />as of March 31, 2016<br />Detailed guide for newbies like me.<br /><br />... continued<br /><br />4. Goto:<br /><br />    <a href="http://pecl.php.net/package/imagick" rel="nofollow" target="_blank">http://pecl.php.net/package/imagick</a><br /><br />    as of today, latest is 3.4.1 so I went to:<br />    <a href="http://pecl.php.net/package/imagick/3.4.1/windows" rel="nofollow" target="_blank">http://pecl.php.net/package/imagick/3.4.1/windows</a><br /><br />    My PHP version is: 5.6.18, and Thread Safety is Yes from<br />    Step #1, so I downloaded:<br />       5.6 Thread Safe (TS) x86<br />    I got: php_imagick-3.4.1-5.6-ts-vc11-x86.zip<br /><br />5. Unzip and copy "php_imagick.dll" to the php extension folder:<br /><br />    In my case:<br />    php_imagick.dll --&gt; C:\UwAmp\bin\php\php-5.6.18\ext<br /><br />    Note: this ZIP also contains dlls which other guides says<br />    to extract to the extension folder of apache.<br />    NO NEED TO DO IT. Step #3 has taken care of it.<br /><br />6. Edit "php.ini" and add at the very end (could be <br />    anywhere I suppose):<br /><br />      [Imagick]<br />      extension=php_imagick.dll<br /><br />      For super newbies: click the edit button in the UwAmp UI,<br />      "php_uwamp.ini" will open and edit it. It will be copied to<br />      the correct php.ini when UwAmp is restarted. I had <br />      trouble at first since there are several php*.ini scattered <br />      all over.<br /><br />7. Restart Apache<br /><br />8. Check PHPInfo<br />    scroll to section (or find): imagick    <br />    number of supported formats: 234<br /><br />    If there is no "imagick" section or "supported format" is 0,<br />    something went wrong.<br /><br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="127943">  <div class="votes">
    <div id="Vu127943">
    <a href="/manual/vote-note.php?id=127943&amp;page=imagick.setup&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127943">
    <a href="/manual/vote-note.php?id=127943&amp;page=imagick.setup&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127943" title="76% like this...">
    11
    </div>
  </div>
  <a href="#127943" class="name">
  <strong class="user"><em>justahelpfullnote at nononono dot no</em></strong></a><a class="genanchor" href="#127943"> &para;</a><div class="date" title="2022-11-16 05:54"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127943">
<div class="phpcode"><code><span class="html">For windows users, I found this, hope this help<br /><br /><a href="https://mlocati.github.io/articles/php-windows-imagick.html" rel="nofollow" target="_blank">https://mlocati.github.io/articles/php-windows-imagick.html</a><br /><br />thank you Michele Locati</span></code></div>
  </div>
 </div>
  <div class="note" id="119083">  <div class="votes">
    <div id="Vu119083">
    <a href="/manual/vote-note.php?id=119083&amp;page=imagick.setup&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119083">
    <a href="/manual/vote-note.php?id=119083&amp;page=imagick.setup&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119083" title="73% like this...">
    119
    </div>
  </div>
  <a href="#119083" class="name">
  <strong class="user"><em>Ian Co</em></strong></a><a class="genanchor" href="#119083"> &para;</a><div class="date" title="2016-03-30 05:29"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119083">
<div class="phpcode"><code><span class="html">Steps to Install ImageMagick on UwAmp for Windows:<br />as of March 31, 2016<br />Detailed guide for newbies like me.<br />Took a long time to get it to work.<br /><br />I initially followed:<br /><a href="http://php" rel="nofollow" target="_blank">http://php</a> .net/manual/en/imagick.installation.php<br />but after installation, PHPInfo under imagick shows<br />number of supported formats = 0 <br /><br />So I followed these steps, clobbered from various sources<br />to get it to work.<br /><br />1. Open PHPInfo and check:<br />   Architecture = x86 or x64<br />   Thread Safety = yes or no<br /><br />2. Download ImageMagick from:<br /><br />   <a href="http://windows.php.net/downloads/pecl/deps/" rel="nofollow" target="_blank">http://windows.php.net/downloads/pecl/deps/</a><br /><br />   In my case I downloaded: ImageMagick-6.9.3-7-vc11-x86.zip<br />   because the Architecture under PHPInfo is x86<br />   as for vc11 or vc14<br />   search google for "visual c++ 11 runtime" or<br />   "visual c++ 14 runtime" and install it<br /><br />3. Unzip and copy all dlls from the bin subfolder to the<br />    Apache bin directory. It's a bunch of CORE_RL_*.dll<br />    and IM_MOD_RL_*.dll plus a few other dlls.<br /><br />    In my case, I installed UwAmp in C:\UwAmp, so:<br />    (from zip) bin/*.dll --&gt; C:\UwAmp\bin\apache\bin</span></code></div>
  </div>
 </div>
  <div class="note" id="92727">  <div class="votes">
    <div id="Vu92727">
    <a href="/manual/vote-note.php?id=92727&amp;page=imagick.setup&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92727">
    <a href="/manual/vote-note.php?id=92727&amp;page=imagick.setup&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92727" title="57% like this...">
    30
    </div>
  </div>
  <a href="#92727" class="name">
  <strong class="user"><em>William Sze</em></strong></a><a class="genanchor" href="#92727"> &para;</a><div class="date" title="2009-08-06 12:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92727">
<div class="phpcode"><code><span class="html">After 2 hours of looking for help from different documentation &amp; sites, I found out none of them are complete solution.  So, I summary my instruction here:<br /><br />1) yum install php-devel<br />2) cd /usr<br />3) wget <a href="http://pear.php.net/go-pear" rel="nofollow" target="_blank">http://pear.php.net/go-pear</a><br />4) php go-pear<br />5) See the following line in /etc/php.ini [include_path=".:/usr/PEAR"]<br />6) pecl install imagick<br />7) Add the following line in /etc/php.ini [extension=imagick.so]<br />8) service httpd restart<br /><br />Hopefully, I can save other engineer effort &amp; time.... Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="129915">  <div class="votes">
    <div id="Vu129915">
    <a href="/manual/vote-note.php?id=129915&amp;page=imagick.setup&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129915">
    <a href="/manual/vote-note.php?id=129915&amp;page=imagick.setup&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129915" title="no votes...">
    0
    </div>
  </div>
  <a href="#129915" class="name">
  <strong class="user"><em>jcvasquez07 at gmail dot com</em></strong></a><a class="genanchor" href="#129915"> &para;</a><div class="date" title="2024-12-14 03:16"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129915">
<div class="phpcode"><code><span class="html">For windows users, any stack: go to <a href="https://mlocati.github.io/articles/php-windows-imagick.html" rel="nofollow" target="_blank">https://mlocati.github.io/articles/php-windows-imagick.html</a> and check the filters for php version, thread safety and architecture. Download the appropriate package and follow install instructions on the site.</span></code></div>
  </div>
 </div>
  <div class="note" id="120316">  <div class="votes">
    <div id="Vu120316">
    <a href="/manual/vote-note.php?id=120316&amp;page=imagick.setup&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120316">
    <a href="/manual/vote-note.php?id=120316&amp;page=imagick.setup&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120316" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120316" class="name">
  <strong class="user"><em>Rob Oz</em></strong></a><a class="genanchor" href="#120316"> &para;</a><div class="date" title="2016-12-12 07:09"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120316">
<div class="phpcode"><code><span class="html">Just a note that the 'Ian Co' instructions for 'Installing ImageMagick on UwAmp for Windows' also works for XAMPP.  Just change the paths accordingly.</span></code></div>
  </div>
 </div>
  <div class="note" id="119394">  <div class="votes">
    <div id="Vu119394">
    <a href="/manual/vote-note.php?id=119394&amp;page=imagick.setup&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119394">
    <a href="/manual/vote-note.php?id=119394&amp;page=imagick.setup&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119394" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#119394" class="name">
  <strong class="user"><em>laszlo dot phpnet at lieszkovszky dot com</em></strong></a><a class="genanchor" href="#119394"> &para;</a><div class="date" title="2016-05-27 03:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119394">
<div class="phpcode"><code><span class="html">Addendum to Ian Co's "Steps to Install ImageMagick for Windows" specifically for Uniform Server Z and how to fix if you get an empty list of ImageMagick supported formats):<br /><br />Thanks to Ian Co's comments above for setting me in the right direction.<br /><br />My Uniform Server is installed to B:\UniServerZ, adjust the following steps to your specific installation.<br /><br />If you've been messing around with a gazillion solutions like me, first delete any previous copies of imagemagick dll-s (i.e. IM_MOD_RL...dll-s, CORE_RL...dll-s) from your sysem, i.e. I had copied them to C:\Windows\system, B:\UniServerZ\core\php56, B:\UniServerZ\core\php56\extensions. <br /><br />1. Download ImageMagick-6.8.9-1-vc9-x86.zip from <a href="http://windows.php.net/downloads/pecl/deps/" rel="nofollow" target="_blank">http://windows.php.net/downloads/pecl/deps/</a><br /><br />Extract contents of bin folder to B:\UniServerZ\core\php56 (or whichever vresion of php you are using)<br /><br />2. Download the appropriate imagick package from  <a href="http://pecl.php.net/package/imagick/3.1.2/windows" rel="nofollow" target="_blank">http://pecl.php.net/package/imagick/3.1.2/windows</a><br />For me the right one was  php_imagick-3.1.2-5.6-ts-vc11-x86.zip , check phpinfo whether you need the thread-safe version or not and which architecture.<br /><br />Extract php_imagemagick.dll ONLY (and not the other dll-s) to B:\UniServerZ\core\php56\extensions<br /><br />Previously I had tried ImageMagick-6.9.3-7-vc11-x86.zip and ImageMagick-6.9.3-7-vc14-x86.zip but the dll-s here did not work, perhaps because Uniform Server was compiled using VC9? and these were compiled with later versions!? What a mess.<br /><br />I had also tried creating a C:\ImageMagick and adding it to PATH user-level and to MAGICK_HOME system-level environment variables, but this proved unnecessary (although it also works).<br /><br />Also, installing the windows binary releases from <br /><a href="http://www.imagemagick.org/script/binary-releases.php#windows" rel="nofollow" target="_blank">http://www.imagemagick.org/script/binary-releases.php#windows</a><br />was unnecessary (and might actually mess things up if windows tries those dll-s first).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=imagick.setup&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.setup.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.imagick.php">ImageMagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.imagick.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="current">
                            <a href="imagick.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="imagick.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="imagick.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.imagick.php" title="Imagick">Imagick</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickdraw.php" title="ImagickDraw">ImagickDraw</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickpixel.php" title="ImagickPixel">ImagickPixel</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickpixeliterator.php" title="ImagickPixelIterator">ImagickPixelIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickkernel.php" title="ImagickKernel">ImagickKernel</a>
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
