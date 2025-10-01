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

 <link rel="canonical" href="https://www.php.net/manual/en/intro.sodium.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/intro.sodium.php">
 <link rel="alternate" href="https://www.php.net/manual/en/intro.sodium.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sodium.php">
 <link rel="prev" href="https://www.php.net/manual/en/book.sodium.php">
 <link rel="next" href="https://www.php.net/manual/en/sodium.setup.php">

 <link rel="alternate" href="https://www.php.net/manual/en/intro.sodium.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/intro.sodium.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/intro.sodium.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/intro.sodium.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/intro.sodium.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/intro.sodium.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/intro.sodium.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/intro.sodium.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/intro.sodium.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/intro.sodium.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/intro.sodium.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Introduction" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Introduction - Manual" />
<meta name="twitter:description" content="Introduction" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Introduction - Manual" />
<meta itemprop="description" content="Introduction" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Introduction" />

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
        <a href="sodium.setup.php">
          Installing/Configuring &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="book.sodium.php">
          &laquo; Sodium        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.sodium.php'>Sodium</a></li>      </ul>
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
            <option value='en/intro.sodium.php' selected="selected">English</option>
            <option value='de/intro.sodium.php'>German</option>
            <option value='es/intro.sodium.php'>Spanish</option>
            <option value='fr/intro.sodium.php'>French</option>
            <option value='it/intro.sodium.php'>Italian</option>
            <option value='ja/intro.sodium.php'>Japanese</option>
            <option value='pt_BR/intro.sodium.php'>Brazilian Portuguese</option>
            <option value='ru/intro.sodium.php'>Russian</option>
            <option value='tr/intro.sodium.php'>Turkish</option>
            <option value='uk/intro.sodium.php'>Ukrainian</option>
            <option value='zh/intro.sodium.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="intro.sodium" class="preface">
  <h1 class="title">Introduction</h1>
  <p class="para">
   Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more.
   Its goal is to provide all of the core operations needed to build higher-level cryptographic tools.
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sodium/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fintro.sodium%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=intro.sodium&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intro.sodium.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122003">  <div class="votes">
    <div id="Vu122003">
    <a href="/manual/vote-note.php?id=122003&amp;page=intro.sodium&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122003">
    <a href="/manual/vote-note.php?id=122003&amp;page=intro.sodium&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122003" title="70% like this...">
    65
    </div>
  </div>
  <a href="#122003" class="name">
  <strong class="user"><em>rafayhingoro at hotmail dot com</em></strong></a><a class="genanchor" href="#122003"> &para;</a><div class="date" title="2017-12-10 06:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122003">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="comment">//Simple Usage<br /><br />/**<br /> * Encrypt a message<br /> * <br /> * @param string $message - message to encrypt<br /> * @param string $key - encryption key<br /> * @return string<br /> */<br /></span><span class="keyword">function </span><span class="default">safeEncrypt</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">)<br />{<br />    </span><span class="default">$nonce </span><span class="keyword">= </span><span class="default">random_bytes</span><span class="keyword">(<br />        </span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES<br />    </span><span class="keyword">);<br /><br />    </span><span class="default">$cipher </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(<br />        </span><span class="default">$nonce</span><span class="keyword">.<br />        </span><span class="default">sodium_crypto_secretbox</span><span class="keyword">(<br />            </span><span class="default">$message</span><span class="keyword">,<br />            </span><span class="default">$nonce</span><span class="keyword">,<br />            </span><span class="default">$key<br />        </span><span class="keyword">)<br />    );<br />    </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">);<br />    </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    return </span><span class="default">$cipher</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * Decrypt a message<br /> * <br /> * @param string $encrypted - message encrypted with safeEncrypt()<br /> * @param string $key - encryption key<br /> * @return string<br /> */<br /></span><span class="keyword">function </span><span class="default">safeDecrypt</span><span class="keyword">(</span><span class="default">$encrypted</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">)<br />{   <br />    </span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$encrypted</span><span class="keyword">);<br />    if (</span><span class="default">$decoded </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Scream bloody murder, the encoding failed'</span><span class="keyword">);<br />    }<br />    if (</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">) &lt; (</span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES </span><span class="keyword">+ </span><span class="default">SODIUM_CRYPTO_SECRETBOX_MACBYTES</span><span class="keyword">)) {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Scream bloody murder, the message was truncated'</span><span class="keyword">);<br />    }<br />    </span><span class="default">$nonce </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">);<br />    </span><span class="default">$ciphertext </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">);<br /><br />    </span><span class="default">$plain </span><span class="keyword">= </span><span class="default">sodium_crypto_secretbox_open</span><span class="keyword">(<br />        </span><span class="default">$ciphertext</span><span class="keyword">,<br />        </span><span class="default">$nonce</span><span class="keyword">,<br />        </span><span class="default">$key<br />    </span><span class="keyword">);<br />    if (</span><span class="default">$plain </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />         throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'the message was tampered with in transit'</span><span class="keyword">);<br />    }<br />    </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$ciphertext</span><span class="keyword">);<br />    </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    return </span><span class="default">$plain</span><span class="keyword">;<br />}<br /></span><span class="comment">//Encrypt &amp; Decrypt your message<br /></span><span class="default">$key </span><span class="keyword">= </span><span class="default">sodium_crypto_secretbox_keygen</span><span class="keyword">();<br /></span><span class="default">$enc </span><span class="keyword">= </span><span class="default">safeEncrypt</span><span class="keyword">(</span><span class="string">'Abdul Rafay Hingoro'</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">); </span><span class="comment">//generates random  encrypted string (Base64 related)<br /></span><span class="keyword">echo </span><span class="default">$enc</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /></span><span class="default">$dec </span><span class="keyword">= </span><span class="default">safeDecrypt</span><span class="keyword">(</span><span class="default">$enc</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">); </span><span class="comment">//decrypts encoded string generated via safeEncrypt function <br /></span><span class="keyword">echo </span><span class="default">$dec</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />//Output<br />DEx9ATXEg/eRq8GWD3NT5BatB3m31WEDEYLK2V4L0Am5GZGoa2rvYWUpoUeCrm7W/pdgLJrNoE6AA8U=<br />Abdul Rafay Hingoro</span></code></div>
  </div>
 </div>
  <div class="note" id="122027">  <div class="votes">
    <div id="Vu122027">
    <a href="/manual/vote-note.php?id=122027&amp;page=intro.sodium&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122027">
    <a href="/manual/vote-note.php?id=122027&amp;page=intro.sodium&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122027" title="71% like this...">
    3
    </div>
  </div>
  <a href="#122027" class="name">
  <strong class="user"><em>jedisct1 at php dot net</em></strong></a><a class="genanchor" href="#122027"> &para;</a><div class="date" title="2017-12-15 08:53"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122027">
<div class="phpcode"><code><span class="html">With sensitive data, use `sodium_bin2base64()` and `sodium_base642bin()` than `base64_encode()` and `base64_decode()`.<br /><br />The sodium functions provide better protection against side channels, are more flexible, and perform stricter validation.</span></code></div>
  </div>
 </div>
  <div class="note" id="122685">  <div class="votes">
    <div id="Vu122685">
    <a href="/manual/vote-note.php?id=122685&amp;page=intro.sodium&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122685">
    <a href="/manual/vote-note.php?id=122685&amp;page=intro.sodium&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122685" title="62% like this...">
    7
    </div>
  </div>
  <a href="#122685" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122685"> &para;</a><div class="date" title="2018-05-01 12:30"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122685">
<div class="phpcode"><code><span class="html">Clearly there isn't much support or documentation for this yet.  <br /><br />Based off the same safeEncrypt implementation here and elsewhere, I updated it to work for me (I'm running libsodium 1.0.8).<br /><br />I added these methods to a utility class.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// simple example<br /></span><span class="default">$message </span><span class="keyword">= </span><span class="string">'My ultra-sensitive information'</span><span class="keyword">;<br /><br /></span><span class="default">$secret_key </span><span class="keyword">= </span><span class="default">Util</span><span class="keyword">::</span><span class="default">generateSecretKey</span><span class="keyword">();<br /></span><span class="default">$encrypted </span><span class="keyword">= </span><span class="default">Util</span><span class="keyword">::</span><span class="default">encrypt</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$secret_key</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">);<br /></span><span class="default">$decrypted </span><span class="keyword">= </span><span class="default">Util</span><span class="keyword">::</span><span class="default">decrypt</span><span class="keyword">(</span><span class="default">$encrypted</span><span class="keyword">, </span><span class="default">$secret_key</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">);<br /><br />print </span><span class="default">$decrypted</span><span class="keyword">;<br /><br /></span><span class="comment">// outputs 'My ultra-sensitive information'<br />// encrypted data is padded to 64-byte chunks to obfuscate actual data length<br /><br /></span><span class="keyword">class </span><span class="default">Util<br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Get a secret key for encrypt/decrypt<br />     *<br />     * Use libsodium to generate a secret key.  This should be kept secure.<br />     *<br />     * @return string<br />     * @see encrypt(), decrypt()<br />     */<br />    </span><span class="keyword">public static function </span><span class="default">generateSecretKey</span><span class="keyword">()<br />    {<br />        return </span><span class="default">sodium_crypto_secretbox_keygen</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">/**<br />     * Encrypt a message<br />     *<br />     * Use libsodium to encrypt a string<br />     *<br />     * @param string $message - message to encrypt<br />     * @param string $secret_key - encryption key<br />     * @param int $block_size - pad the message by $block_size byte chunks to conceal encrypted data size. must match between encrypt/decrypt!<br />     * @return string<br />     * @see decrypt()<br />     * @see <a href="https://github.com/jedisct1/libsodium/issues/392" rel="nofollow" target="_blank">https://github.com/jedisct1/libsodium/issues/392</a><br />     */<br />    </span><span class="keyword">public static function </span><span class="default">encrypt</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$secret_key</span><span class="keyword">, </span><span class="default">$block_size </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// create a nonce for this operation. it will be stored and recovered in the message itself<br />        </span><span class="default">$nonce </span><span class="keyword">= </span><span class="default">random_bytes</span><span class="keyword">(</span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES</span><span class="keyword">);<br /><br />        </span><span class="comment">// pad to $block_size byte chunks (enforce 512 byte limit)<br />        </span><span class="default">$padded_message </span><span class="keyword">= </span><span class="default">sodium_pad</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$block_size </span><span class="keyword">&lt;= </span><span class="default">512 </span><span class="keyword">? </span><span class="default">$block_size </span><span class="keyword">: </span><span class="default">512</span><span class="keyword">);<br /><br />        </span><span class="comment">// encrypt message and combine with nonce<br />        </span><span class="default">$cipher </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$nonce </span><span class="keyword">. </span><span class="default">sodium_crypto_secretbox</span><span class="keyword">(</span><span class="default">$padded_message</span><span class="keyword">, </span><span class="default">$nonce</span><span class="keyword">, </span><span class="default">$secret_key</span><span class="keyword">));<br /><br />        </span><span class="comment">// cleanup<br />        </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">);<br />        </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$secret_key</span><span class="keyword">);<br /><br />        return </span><span class="default">$cipher</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * Decrypt a message<br />     *<br />     * Use libsodium to decrypt an encrypted string<br />     *<br />     * @param string $encrypted - the encrypted message<br />     * @param string $key - encryption key<br />     * @param int $block_size - pad the message by $block_size byte chunks to conceal encrypted data size. must match between encrypt/decrypt!<br />     * @return string<br />     * @see encrypt()<br />     * @see <a href="https://github.com/jedisct1/libsodium/issues/392" rel="nofollow" target="_blank">https://github.com/jedisct1/libsodium/issues/392</a><br />     */<br />    </span><span class="keyword">public static function </span><span class="default">decrypt</span><span class="keyword">(</span><span class="default">$encrypted</span><span class="keyword">, </span><span class="default">$secret_key</span><span class="keyword">, </span><span class="default">$block_size </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// unpack base64 message<br />        </span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$encrypted</span><span class="keyword">);<br /><br />        </span><span class="comment">// check for general failures<br />        </span><span class="keyword">if (</span><span class="default">$decoded </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />            throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'The encoding failed'</span><span class="keyword">);<br />        }<br /><br />        </span><span class="comment">// check for incomplete message. CRYPTO_SECRETBOX_MACBYTES doesn't seem to exist in this version...<br />        </span><span class="keyword">if (!</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'CRYPTO_SECRETBOX_MACBYTES'</span><span class="keyword">)) </span><span class="default">define</span><span class="keyword">(</span><span class="string">'CRYPTO_SECRETBOX_MACBYTES'</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">);<br />        if (</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">) &lt; (</span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES </span><span class="keyword">+ </span><span class="default">CRYPTO_SECRETBOX_MACBYTES</span><span class="keyword">)) {<br />            throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'The message was truncated'</span><span class="keyword">);<br />        }<br /><br />        </span><span class="comment">// pull nonce and ciphertext out of unpacked message<br />        </span><span class="default">$nonce </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">);<br />        </span><span class="default">$ciphertext </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="default">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">);<br /><br />        </span><span class="comment">// decrypt it and account for extra padding from $block_size (enforce 512 byte limit)<br />        </span><span class="default">$decrypted_padded_message </span><span class="keyword">= </span><span class="default">sodium_crypto_secretbox_open</span><span class="keyword">(</span><span class="default">$ciphertext</span><span class="keyword">, </span><span class="default">$nonce</span><span class="keyword">, </span><span class="default">$secret_key</span><span class="keyword">);<br />        </span><span class="default">$message </span><span class="keyword">= </span><span class="default">sodium_unpad</span><span class="keyword">(</span><span class="default">$decrypted_padded_message</span><span class="keyword">, </span><span class="default">$block_size </span><span class="keyword">&lt;= </span><span class="default">512 </span><span class="keyword">? </span><span class="default">$block_size </span><span class="keyword">: </span><span class="default">512</span><span class="keyword">);<br /><br />        </span><span class="comment">// check for encrpytion failures<br />        </span><span class="keyword">if (</span><span class="default">$message </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />             throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'The message was tampered with in transit'</span><span class="keyword">);<br />        }<br /><br />        </span><span class="comment">// cleanup<br />        </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$ciphertext</span><span class="keyword">);<br />        </span><span class="default">sodium_memzero</span><span class="keyword">(</span><span class="default">$secret_key</span><span class="keyword">);<br /><br />        return </span><span class="default">$message</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122172">  <div class="votes">
    <div id="Vu122172">
    <a href="/manual/vote-note.php?id=122172&amp;page=intro.sodium&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122172">
    <a href="/manual/vote-note.php?id=122172&amp;page=intro.sodium&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122172" title="66% like this...">
    1
    </div>
  </div>
  <a href="#122172" class="name">
  <strong class="user"><em>jedisct1 at php dot net</em></strong></a><a class="genanchor" href="#122172"> &para;</a><div class="date" title="2017-12-22 09:37"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122172">
<div class="phpcode"><code><span class="html">You may want to use `feof($fd_in)` instead of `stream_get_meta_data($fd_in)['unread_bytes'] &lt;= 0` in the examples above.<br /><br />Or just read the documentation of the PHP extension here: <a href="https://github.com/jedisct1/libsodium-php" rel="nofollow" target="_blank">https://github.com/jedisct1/libsodium-php</a> -- it is always more up to date.</span></code></div>
  </div>
 </div>
  <div class="note" id="122025">  <div class="votes">
    <div id="Vu122025">
    <a href="/manual/vote-note.php?id=122025&amp;page=intro.sodium&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122025">
    <a href="/manual/vote-note.php?id=122025&amp;page=intro.sodium&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122025" title="54% like this...">
    1
    </div>
  </div>
  <a href="#122025" class="name">
  <strong class="user"><em>jedisct1 at php dot net</em></strong></a><a class="genanchor" href="#122025"> &para;</a><div class="date" title="2017-12-15 08:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122025">
<div class="phpcode"><code><span class="html">## Encrypt a file using a secret key<br /><br /><span class="default">&lt;?php<br />$secret_key </span><span class="keyword">= </span><span class="default">sodium_crypto_secretstream_xchacha20poly1305_keygen</span><span class="keyword">();<br /></span><span class="default">$input_file </span><span class="keyword">= </span><span class="string">'/tmp/example.original'</span><span class="keyword">;<br /></span><span class="default">$encrypted_file </span><span class="keyword">= </span><span class="string">'/tmp/example.enc'</span><span class="keyword">;<br /></span><span class="default">$chunk_size </span><span class="keyword">= </span><span class="default">4096</span><span class="keyword">;<br /><br /></span><span class="default">$fd_in </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$input_file</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br /></span><span class="default">$fd_out </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$encrypted_file</span><span class="keyword">, </span><span class="string">'wb'</span><span class="keyword">);<br /><br />list(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">) = </span><span class="default">sodium_crypto_secretstream_xchacha20poly1305_init_push</span><span class="keyword">(</span><span class="default">$secret_key</span><span class="keyword">);<br /><br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd_out</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">);<br /><br /></span><span class="default">$tag </span><span class="keyword">= </span><span class="default">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE</span><span class="keyword">;<br />do {<br />    </span><span class="default">$chunk </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">, </span><span class="default">$chunk_size</span><span class="keyword">);<br />    if (</span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">)[</span><span class="string">'unread_bytes'</span><span class="keyword">] &lt;= </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$tag </span><span class="keyword">= </span><span class="default">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL</span><span class="keyword">;<br />    }<br />    </span><span class="default">$encrypted_chunk </span><span class="keyword">= </span><span class="default">sodium_crypto_secretstream_xchacha20poly1305_push</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$chunk</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd_out</span><span class="keyword">, </span><span class="default">$encrypted_chunk</span><span class="keyword">);<br />} while (</span><span class="default">$tag </span><span class="keyword">!== </span><span class="default">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL</span><span class="keyword">);<br /><br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd_out</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Decrypt the file:<br /><br /><span class="default">&lt;?php<br />$decrypted_file </span><span class="keyword">= </span><span class="string">'/tmp/example.dec'</span><span class="keyword">;<br /><br /></span><span class="default">$fd_in </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$encrypted_file</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br /></span><span class="default">$fd_out </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$decrypted_file</span><span class="keyword">, </span><span class="string">'wb'</span><span class="keyword">);<br /><br /></span><span class="default">$header </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">, </span><span class="default">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_HEADERBYTES</span><span class="keyword">);<br /><br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">sodium_crypto_secretstream_xchacha20poly1305_init_pull</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">, </span><span class="default">$secret_key</span><span class="keyword">);<br /><br /></span><span class="default">$tag </span><span class="keyword">= </span><span class="default">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE</span><span class="keyword">;<br />while (</span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">)[</span><span class="string">'unread_bytes'</span><span class="keyword">] &gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp;<br />       </span><span class="default">$tag </span><span class="keyword">!== </span><span class="default">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL</span><span class="keyword">) {<br />    </span><span class="default">$chunk </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">, </span><span class="default">$chunk_size </span><span class="keyword">+ </span><span class="default">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_ABYTES</span><span class="keyword">);<br />    list(</span><span class="default">$decrypted_chunk</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">) = </span><span class="default">sodium_crypto_secretstream_xchacha20poly1305_pull</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$chunk</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd_out</span><span class="keyword">, </span><span class="default">$decrypted_chunk</span><span class="keyword">);<br />}<br /></span><span class="default">$ok </span><span class="keyword">= </span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">)[</span><span class="string">'unread_bytes'</span><span class="keyword">] &lt;= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd_out</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd_in</span><span class="keyword">);<br /><br />if (!</span><span class="default">$ok</span><span class="keyword">) {<br />    die(</span><span class="string">'Invalid/corrupted input'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />How it works:<br /><br />There's a little bit more code than in the previous examples.<br /><br />In fact, `crypto_secretbox()` would work to encrypt as file, but only<br />if that file is pretty small. Since we have to provide the entire<br />content as a string, it has to fit in memory.<br /><br />If the file is large, we can split it into small chunks, and encrypt<br />chunks individually.<br /><br />By doing do, we can encrypt arbitrary large files. But we need to make<br />sure that chunks cannot be deleted, truncated, duplicated and<br />reordered. In other words, we don't have a single "message", but a<br />stream of messages, and during the decryption process, we need a way<br />to check that the whole stream matches what we encrypted.<br /><br />So we create a new stream (`init_push`) and push a sequence of messages<br />into it (`push`). Each individual message has a tag attached to it, by<br />default `TAG_MESSAGE`. In order for the decryption process to know<br />where the end of the stream is, we tag the last message with the<br />`TAG_FINAL` tag.<br /><br />When we consume the stream (`init_pull`, then `pull` for each<br />message), we check that they can be properly decrypted, and retrieve<br />both the decrypted chunks and the attached tags. If we read the last<br />chunk (`TAG_FINAL`) and we are at the end of the file, we know that we<br />completely recovered the original stream.</span></code></div>
  </div>
 </div>
  <div class="note" id="122024">  <div class="votes">
    <div id="Vu122024">
    <a href="/manual/vote-note.php?id=122024&amp;page=intro.sodium&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122024">
    <a href="/manual/vote-note.php?id=122024&amp;page=intro.sodium&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122024" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122024" class="name">
  <strong class="user"><em>jedisct1 at php dot net</em></strong></a><a class="genanchor" href="#122024"> &para;</a><div class="date" title="2017-12-15 08:44"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122024">
<div class="phpcode"><code><span class="html">## Encrypt a single message using a secret key<br /><br />Encryption:<br /><br />```php<br />$secret_key = sodium_crypto_secretbox_keygen();<br />$message = 'Sensitive information';<br /><br />$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);<br />$encrypted_message = sodium_crypto_secretbox($message, $nonce, $secret_key);<br />```<br /><br />Decryption:<br /><br />```php<br />$decrypted_message = sodium_crypto_secretbox_open($encrypted_message, $nonce, $secret_key);<br />```<br /><br />How it works:<br /><br />`$secret_key` is a secret key. Not a password. It's binary data, not<br />something designed to be human readable, but rather to have a key<br />space as large as possible for a given length.<br />The `keygen()` function creates such a key. That has to remain secret,<br />as it is used both to encrypt and decrypt data.<br /><br />`$nonce` is a unique value. Like the secret, its length is fixed. But<br />it doesn't have to be secret, and can be sent along with the encrypted<br />message. The nonce doesn't have to be unpredicable either. It just has<br />to be unique for a given key. With the `secretbox()` API, using<br />`random_bytes()` is a totally fine way to generate nonces.<br /><br />Encrypted messages are slightly larger than unencrypted messages,<br />because they include an authenticator, used by the decryption function<br />to check that the content was not altered.<br /><br />## Encrypt a single message using a secret key, and hide its length<br /><br />Encryption:<br /><br />```php<br />$secret_key = sodium_crypto_secretbox_keygen();<br />$message = 'Sensitive information';<br />$block_size = 16;<br /><br />$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);<br />$padded_message = sodium_pad($padded_message, $block_size);<br />$encrypted_message = sodium_crypto_secretbox($padded_message, $nonce, $secret_key);<br />```<br /><br />Decryption:<br /><br />```php<br />$decrypted_padded_message = sodium_crypto_secretbox_open($encrypted_message, $nonce, $secret_key);<br />$decrypted_message = sodium_unpad($decrypted_padded_message, $block_size);<br />```<br /><br />How it works:<br /><br />Sometimes, the length of a message may provide a lot of information<br />about its nature. If a message is one of "yes", "no" and "maybe",<br />encrypting the message doesn't help: knowing the length is enough to<br />know what the message is.<br /><br />Padding is a technique to mitigate this, by making the length a<br />multiple of a given block size.<br /><br />Messages must be padded prior to encryption, and unpadded after<br />decryption.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=intro.sodium&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intro.sodium.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sodium.php">Sodium</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="intro.sodium.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sodium.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="sodium.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.sodium.php" title="Sodium Functions">Sodium Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.sodiumexception.php" title="SodiumException">SodiumException</a>
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
