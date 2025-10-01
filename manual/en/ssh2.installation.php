<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installation - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ssh2.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ssh2.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ssh2.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ssh2.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/ssh2.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/ssh2.resources.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ssh2.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ssh2.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ssh2.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ssh2.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ssh2.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ssh2.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ssh2.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ssh2.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ssh2.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ssh2.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ssh2.installation.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installation - Manual" />
<meta name="twitter:description" content="Installation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installation - Manual" />
<meta itemprop="description" content="Installation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installation" />

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
        <a href="ssh2.resources.php">
          Resource Types &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ssh2.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ssh2.php'>SSH2</a></li>      <li><a href='ssh2.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/ssh2.installation.php' selected="selected">English</option>
            <option value='de/ssh2.installation.php'>German</option>
            <option value='es/ssh2.installation.php'>Spanish</option>
            <option value='fr/ssh2.installation.php'>French</option>
            <option value='it/ssh2.installation.php'>Italian</option>
            <option value='ja/ssh2.installation.php'>Japanese</option>
            <option value='pt_BR/ssh2.installation.php'>Brazilian Portuguese</option>
            <option value='ru/ssh2.installation.php'>Russian</option>
            <option value='tr/ssh2.installation.php'>Turkish</option>
            <option value='uk/ssh2.installation.php'>Ukrainian</option>
            <option value='zh/ssh2.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ssh2.installation" class="section">
 <h2 class="title">Installation</h2>

 <p class="para">
  Information for installing this PECL extension may be
found in the manual chapter titled <a href="install.pecl.php" class="link">Installation
of PECL extensions</a>. Additional information such as new releases,
downloads, source files, maintainer information, and a CHANGELOG, can be
located here: 
  <a href="https://pecl.php.net/package/ssh2" class="link external">&raquo;&nbsp;https://pecl.php.net/package/ssh2</a>.
 </p>
 <p class="para">
  Windows binaries (<abbr title="Dynamic Link Library">DLL</abbr> files)
for this <abbr title="PHP Extension and Application Repository">PECL</abbr> extension are available from the PECL website.
 </p>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ssh2/installation.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fssh2.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ssh2.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ssh2.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109853">  <div class="votes">
    <div id="Vu109853">
    <a href="/manual/vote-note.php?id=109853&amp;page=ssh2.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109853">
    <a href="/manual/vote-note.php?id=109853&amp;page=ssh2.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109853" title="54% like this...">
    44
    </div>
  </div>
  <a href="#109853" class="name">
  <strong class="user"><em>zizifu at gmail dot com</em></strong></a><a class="genanchor" href="#109853"> &para;</a><div class="date" title="2012-08-28 07:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109853">
<div class="phpcode"><code><span class="html">CentOS 6.2 64bit Installation Steps:<br /><br />1. download the libssh2 package from <a href="http://libssh2.org," rel="nofollow" target="_blank">http://libssh2.org,</a> command as following: <br />tar vxzf libssh2-1.4.2.tar.gz<br />cd libssh2-1.4.2<br />./configure<br />make<br />make install<br /><br />2. download the php-ssh2 package from <a href="http://pecl.php.net/package/ssh2:" rel="nofollow" target="_blank">http://pecl.php.net/package/ssh2:</a><br /><br />tar vxzf ssh2-0.11.3<br />cd ssh2-0.11.3<br />phpize<br />./configure --with-ssh2<br />make<br />make install<br /><br />and the ssh2.so file will copy into /usr/lib64/php/modules<br />check it.<br /><br />3. modify the php.ini<br /><br />vi /etc/php.ini<br /><br />add the "extension=ssh2.so" to the extension part of php.ini<br /><br />4. check the environment of php, use phpinfo();<br /><br />5. enjoy</span></code></div>
  </div>
 </div>
  <div class="note" id="119708">  <div class="votes">
    <div id="Vu119708">
    <a href="/manual/vote-note.php?id=119708&amp;page=ssh2.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119708">
    <a href="/manual/vote-note.php?id=119708&amp;page=ssh2.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119708" title="61% like this...">
    15
    </div>
  </div>
  <a href="#119708" class="name">
  <strong class="user"><em>domenico dot campagnolo at gmail dot com</em></strong></a><a class="genanchor" href="#119708"> &para;</a><div class="date" title="2016-08-08 03:00"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119708">
<div class="phpcode"><code><span class="html">On Ubuntu 16.04 LTS<br />- PHP 5.6.24-1+deb.sury.org~xenial+1<br /><br />Using terminal as a root<br />     apt install php-ssh2<br />     service apache2 restart</span></code></div>
  </div>
 </div>
  <div class="note" id="119713">  <div class="votes">
    <div id="Vu119713">
    <a href="/manual/vote-note.php?id=119713&amp;page=ssh2.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119713">
    <a href="/manual/vote-note.php?id=119713&amp;page=ssh2.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119713" title="66% like this...">
    6
    </div>
  </div>
  <a href="#119713" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#119713"> &para;</a><div class="date" title="2016-08-09 01:00"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119713">
<div class="phpcode"><code><span class="html">[Editor's note: unless you have special demands, use the appropriate deps package from &lt;<a href="http://windows.php.net/downloads/php-sdk/&gt;.]" rel="nofollow" target="_blank">http://windows.php.net/downloads/php-sdk/&gt;.]</a>
<br />
<br />SSH2 for Windows is not available from the authors of the extension. But compiled binaries are available from the Apache Lounge (which is recommended by the php.net website too).
<br />
<br />Link for PHP 5.3, 5.4, 5.5, 5.6 and 7.0:
<br /><a href="https://www.apachelounge.com/viewtopic.php?t=6359" rel="nofollow" target="_blank">https://www.apachelounge.com/viewtopic.php?t=6359</a>
<br />
<br />This binaries contain a lot (maybe even all?) for Windows compiled PHP extensions, like the SSH2 extension.
<br />
<br />Please note that it is also highly recommended to use their Windows binary builds for the Apache HTTP server from here: <a href="https://www.apachelounge.com/download/" rel="nofollow" target="_blank">https://www.apachelounge.com/download/</a>
<br />
<br />Older versions can be choosen from the left menu (VC11, VC10, etc.) if required.
<br />
<br />php.net also recommends to use the binary builds from the Apache Lounge.
<br />
<br />Maybe this helps developers, who work with Windows and can't find or compile some extensions themself.</span></code></div>
  </div>
 </div>
  <div class="note" id="118354">  <div class="votes">
    <div id="Vu118354">
    <a href="/manual/vote-note.php?id=118354&amp;page=ssh2.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118354">
    <a href="/manual/vote-note.php?id=118354&amp;page=ssh2.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118354" title="60% like this...">
    6
    </div>
  </div>
  <a href="#118354" class="name">
  <strong class="user"><em>francewhoa+php dot net at ubertus dot ca</em></strong></a><a class="genanchor" href="#118354"> &para;</a><div class="date" title="2015-11-21 11:47"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118354">
<div class="phpcode"><code><span class="html">Steps to install "ssh2" on Debian Jessie 8<br /><br />1. Using Terminal as Root. Run the following command to install the extension package.<br /><br />apt-get install php5-ssh2<br /><br />2. Restart Apache2 server<br /><br />service apache2 restart</span></code></div>
  </div>
 </div>
  <div class="note" id="109528">  <div class="votes">
    <div id="Vu109528">
    <a href="/manual/vote-note.php?id=109528&amp;page=ssh2.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109528">
    <a href="/manual/vote-note.php?id=109528&amp;page=ssh2.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109528" title="53% like this...">
    12
    </div>
  </div>
  <a href="#109528" class="name">
  <strong class="user"><em>dreadwestern at gmail dot com</em></strong></a><a class="genanchor" href="#109528"> &para;</a><div class="date" title="2012-07-26 02:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109528">
<div class="phpcode"><code><span class="html">Steps for installing the extension package on Debian systems:<br /><br />&gt; sudo apt-get install libssh2-php<br />&gt; sudo /etc/init.d/apache2 restart</span></code></div>
  </div>
 </div>
  <div class="note" id="122867">  <div class="votes">
    <div id="Vu122867">
    <a href="/manual/vote-note.php?id=122867&amp;page=ssh2.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122867">
    <a href="/manual/vote-note.php?id=122867&amp;page=ssh2.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122867" title="58% like this...">
    2
    </div>
  </div>
  <a href="#122867" class="name">
  <strong class="user"><em>kurdtpage at gmail dot com</em></strong></a><a class="genanchor" href="#122867"> &para;</a><div class="date" title="2018-06-22 01:34"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122867">
<div class="phpcode"><code><span class="html">The SSH2 binary for Windows (php_ssh2.dll) can be found here: <a href="http://pecl.php.net/package/ssh2/1.1.2/windows" rel="nofollow" target="_blank">http://pecl.php.net/package/ssh2/1.1.2/windows</a></span></code></div>
  </div>
 </div>
  <div class="note" id="126245">  <div class="votes">
    <div id="Vu126245">
    <a href="/manual/vote-note.php?id=126245&amp;page=ssh2.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126245">
    <a href="/manual/vote-note.php?id=126245&amp;page=ssh2.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126245" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126245" class="name">
  <strong class="user"><em>info at kgsw dot de</em></strong></a><a class="genanchor" href="#126245"> &para;</a><div class="date" title="2021-07-16 04:21"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126245">
<div class="phpcode"><code><span class="html">on linux debian like (ubuntu) a simple install will also load 'libssh2-1'<br />$ sudo apt-get update &amp;&amp; sudo apt-get install php-ssh2<br /><br />$ sudo apache2ctl graceful<br />should make it usable<br /><br />use phpinfo() function, some sections are now showing additional "ssh2" parts:<br />- Intro section with new items for "ssh2"<br />- - Additional .ini files parsed<br />- - Registered PHP Streams<br />- ssh2 (new section)<br />- - showing "SSH2 support - enabled"</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ssh2.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ssh2.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ssh2.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ssh2.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="ssh2.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="ssh2.resources.php" title="Resource Types">Resource Types</a>
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
