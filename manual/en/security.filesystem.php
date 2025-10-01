<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Filesystem Security - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/security.filesystem.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/security.filesystem.php">
 <link rel="alternate" href="https://www.php.net/manual/en/security.filesystem.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/security.php">
 <link rel="prev" href="https://www.php.net/manual/en/security.sessions.php">
 <link rel="next" href="https://www.php.net/manual/en/security.filesystem.nullbytes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/security.filesystem.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/security.filesystem.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/security.filesystem.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/security.filesystem.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/security.filesystem.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/security.filesystem.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/security.filesystem.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/security.filesystem.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/security.filesystem.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/security.filesystem.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/security.filesystem.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Filesystem Security" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Filesystem Security - Manual" />
<meta name="twitter:description" content="Filesystem Security" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Filesystem Security - Manual" />
<meta itemprop="description" content="Filesystem Security" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Filesystem Security" />

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
        <a href="security.filesystem.nullbytes.php">
          Null bytes related issues &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="security.sessions.php">
          &laquo; Session Security        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='security.php'>Security</a></li>      </ul>
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
            <option value='en/security.filesystem.php' selected="selected">English</option>
            <option value='de/security.filesystem.php'>German</option>
            <option value='es/security.filesystem.php'>Spanish</option>
            <option value='fr/security.filesystem.php'>French</option>
            <option value='it/security.filesystem.php'>Italian</option>
            <option value='ja/security.filesystem.php'>Japanese</option>
            <option value='pt_BR/security.filesystem.php'>Brazilian Portuguese</option>
            <option value='ru/security.filesystem.php'>Russian</option>
            <option value='tr/security.filesystem.php'>Turkish</option>
            <option value='uk/security.filesystem.php'>Ukrainian</option>
            <option value='zh/security.filesystem.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="security.filesystem" class="chapter">
   <h1 class="title">Filesystem Security</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="security.filesystem.nullbytes.php">Null bytes related issues</a></li></ul>

   <p class="simpara">
    <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> is subject to the security built into most server systems with
    respect to permissions on a file and directory basis. This allows
    you to control which files in the filesystem may be read. Care
    should be taken with any files which are world readable to ensure
    that they are safe for reading by all users who have access to that
    filesystem.
   </p>
   <p class="simpara">
    Since <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> was designed to allow user level access to the filesystem,
    it&#039;s entirely possible to write a <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> script that will allow you
    to read system files such as <var class="filename">/etc/passwd</var>, modify your ethernet
    connections, send massive printer jobs out, etc. This has some
    obvious implications, in that you need to ensure that the files
    that you read from and write to are the appropriate ones.
   </p>
   <p class="simpara">
    Consider the following script, where a user indicates that they&#039;d
    like to delete a file in their home directory. This assumes a
    situation where a <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> web interface is regularly used for file
    management, so the Apache user is allowed to delete files in
    the user home directories.
   </p>
   <p class="para">
    <div class="example" id="example-512">
     <p><strong>Example #1 Poor variable checking leads to....</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Remove a file from the user's home directory<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'user_submitted_name'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$userfile </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'user_submitted_filename'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$homedir  </span><span style="color: #007700">= </span><span style="color: #DD0000">"/home/</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$homedir</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$userfile</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"The file has been deleted!"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   Since the username and the filename are postable from a user form, 
   they can submit a username and a filename belonging to someone else, 
   and delete it even if they&#039;re not supposed to be allowed to do so.
   In this case, you&#039;d want to use some other form of authentication.
   Consider what could happen if the variables submitted were
   <code class="literal">&quot;../etc/&quot;</code> and <code class="literal">&quot;passwd&quot;</code>.
   The code would then effectively read:
    <div class="example" id="example-513">
     <p><strong>Example #2 ... A filesystem attack</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Removes a file from anywhere on the hard drive that<br />// the PHP user has access to. If PHP has root access:<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'user_submitted_name'</span><span style="color: #007700">]; </span><span style="color: #FF8000">// "../etc"<br /></span><span style="color: #0000BB">$userfile </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'user_submitted_filename'</span><span style="color: #007700">]; </span><span style="color: #FF8000">// "passwd"<br /></span><span style="color: #0000BB">$homedir  </span><span style="color: #007700">= </span><span style="color: #DD0000">"/home/</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">"</span><span style="color: #007700">; </span><span style="color: #FF8000">// "/home/../etc"<br /><br /></span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$homedir</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$userfile</span><span style="color: #DD0000">"</span><span style="color: #007700">); </span><span style="color: #FF8000">// "/home/../etc/passwd"<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"The file has been deleted!"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    There are two important measures you should take to prevent these
    issues.
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Only allow limited permissions to the <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> web user binary.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Check all variables which are submitted.
      </span>
     </li>
    </ul>
    Here is an improved script:
    <div class="example" id="example-514">
     <p><strong>Example #3 More secure file name checking</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Removes a file from the hard drive that<br />// the PHP user has access to.<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_USER'</span><span style="color: #007700">]; </span><span style="color: #FF8000">// using an authentication mechanism<br /></span><span style="color: #0000BB">$userfile </span><span style="color: #007700">= </span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'user_submitted_filename'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$homedir  </span><span style="color: #007700">= </span><span style="color: #DD0000">"/home/</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$filepath </span><span style="color: #007700">= </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$homedir</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$userfile</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$filepath</span><span style="color: #007700">) &amp;&amp; </span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$filepath</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$logstring </span><span style="color: #007700">= </span><span style="color: #DD0000">"Deleted </span><span style="color: #0000BB">$filepath</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #0000BB">$logstring </span><span style="color: #007700">= </span><span style="color: #DD0000">"Failed to delete </span><span style="color: #0000BB">$filepath</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"/home/logging/filedelete.log"</span><span style="color: #007700">, </span><span style="color: #DD0000">"a"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$logstring</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$logstring</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    However, even this is not without its flaws. If your authentication
    system allowed users to create their own user logins, and a user
    chose the login <code class="literal">&quot;../etc/&quot;</code>, the system is once again exposed. For
    this reason, you may prefer to write a more customized check:
    <div class="example" id="example-515">
     <p><strong>Example #4 More secure file name checking</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$username     </span><span style="color: #007700">= </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_USER'</span><span style="color: #007700">]; </span><span style="color: #FF8000">// using an authentication mechanisim<br /></span><span style="color: #0000BB">$userfile     </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'user_submitted_filename'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$homedir      </span><span style="color: #007700">= </span><span style="color: #DD0000">"/home/</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$filepath     </span><span style="color: #007700">= </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$homedir</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$userfile</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />if (!</span><span style="color: #0000BB">ctype_alnum</span><span style="color: #007700">(</span><span style="color: #0000BB">$username</span><span style="color: #007700">) || !</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(?:[a-z0-9_-]|\.(?!\.))+$/iD'</span><span style="color: #007700">, </span><span style="color: #0000BB">$userfile</span><span style="color: #007700">)) {<br />    die(</span><span style="color: #DD0000">"Bad username/filename"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// etc.<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    Depending on your operating system, there are a wide variety of files
    which you should be concerned about, including device entries (<var class="filename">/dev/</var>
    or <var class="filename">COM1</var>), configuration files (<var class="filename">/etc/</var> files and
    the <code class="literal">.ini</code> files), well known file storage areas (<var class="filename">/home/</var>,
    <var class="filename">My Documents</var>), etc. For this
    reason, it&#039;s usually easier to create a policy where you forbid
    everything except for what you explicitly allow.
   </p>
   

  </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/security/filesystem.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsecurity.filesystem%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=security.filesystem&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.filesystem.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="58832">  <div class="votes">
    <div id="Vu58832">
    <a href="/manual/vote-note.php?id=58832&amp;page=security.filesystem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58832">
    <a href="/manual/vote-note.php?id=58832&amp;page=security.filesystem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58832" title="74% like this...">
    97
    </div>
  </div>
  <a href="#58832" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#58832"> &para;</a><div class="date" title="2005-11-17 02:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58832">
<div class="phpcode"><code><span class="html">(A) Better not to create files or folders with user-supplied names. If you do not validate enough, you can have trouble. Instead create files and folders with randomly generated names like fg3754jk3h and store the username and this file or folder name in a table named, say, user_objects. This will ensure that whatever the user may type, the command going to the shell will contain values from a specific set only and no mischief can be done.<br /><br />(B) The same applies to commands executed based on an operation that the user chooses. Better not to allow any part of the user's input to go to the command that you will execute. Instead, keep a fixed set of commands and based on what the user has input, and run those only. <br /><br />For example,<br />(A) Keep a table named, say, user_objects with values like:<br />username|chosen_name   |actual_name|file_or_dir<br />--------|--------------|-----------|-----------<br />jdoe    |trekphotos    |m5fg767h67 |D<br />jdoe    |notes.txt     |nm4b6jh756 |F<br />tim1997 |_imp_ folder  |45jkh64j56 |D<br /><br />and always use the actual_name in the filesystem operations rather than the user supplied names.<br /><br />(B)<br /><span class="default">&lt;?php<br />$op </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'op'</span><span class="keyword">];</span><span class="comment">//after a lot of validations <br /></span><span class="default">$dir </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'dirname'</span><span class="keyword">];</span><span class="comment">//after a lot of validations or maybe you can use technique (A)<br /></span><span class="keyword">switch(</span><span class="default">$op</span><span class="keyword">){<br />    case </span><span class="string">"cd"</span><span class="keyword">:<br />        </span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />        break;<br />    case </span><span class="string">"rd"</span><span class="keyword">:<br />        </span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />        break;<br />    .....<br />    default:<br />        </span><span class="default">mail</span><span class="keyword">(</span><span class="string">"webmaster@example.com"</span><span class="keyword">, </span><span class="string">"Mischief"</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REMOTE_ADDR'</span><span class="keyword">].</span><span class="string">" is probably attempting an attack."</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57642">  <div class="votes">
    <div id="Vu57642">
    <a href="/manual/vote-note.php?id=57642&amp;page=security.filesystem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57642">
    <a href="/manual/vote-note.php?id=57642&amp;page=security.filesystem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57642" title="62% like this...">
    22
    </div>
  </div>
  <a href="#57642" class="name">
  <strong class="user"><em>fmrose at ncsu dot edu</em></strong></a><a class="genanchor" href="#57642"> &para;</a><div class="date" title="2005-10-09 04:31"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57642">
<div class="phpcode"><code><span class="html">All of the fixes here assume that it is necessary to allow the user to enter system sensitive information to begin with. The proper way to handle this would be to provide something like a numbered list of files to perform an unlink action on and then the chooses the matching number. There is no way for the user to specify a clever attack circumventing whatever pattern matching filename exclusion syntax that you may have.<br /><br />Anytime you have a security issue, the proper behaviour is to deny all then allow specific instances, not allow all and restrict. For the simple reason that you may not think of every possible restriction.</span></code></div>
  </div>
 </div>
  <div class="note" id="14915">  <div class="votes">
    <div id="Vu14915">
    <a href="/manual/vote-note.php?id=14915&amp;page=security.filesystem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14915">
    <a href="/manual/vote-note.php?id=14915&amp;page=security.filesystem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14915" title="63% like this...">
    21
    </div>
  </div>
  <a href="#14915" class="name">
  <strong class="user"><em>devik at cdi dot cz</em></strong></a><a class="genanchor" href="#14915"> &para;</a><div class="date" title="2001-08-21 07:52"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14915">
<div class="phpcode"><code><span class="html">Well, the fact that all users run under the same UID is a big problem. Userspace  security hacks (ala safe_mode) should not be substitution for proper kernel level security checks/accounting.
<br />Good news: Apache 2 allows you to assign UIDs for different vhosts.
<br />devik</span></code></div>
  </div>
 </div>
  <div class="note" id="89480">  <div class="votes">
    <div id="Vu89480">
    <a href="/manual/vote-note.php?id=89480&amp;page=security.filesystem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89480">
    <a href="/manual/vote-note.php?id=89480&amp;page=security.filesystem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89480" title="56% like this...">
    10
    </div>
  </div>
  <a href="#89480" class="name">
  <strong class="user"><em>Latchezar Tzvetkoff</em></strong></a><a class="genanchor" href="#89480"> &para;</a><div class="date" title="2009-03-10 03:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89480">
<div class="phpcode"><code><span class="html">A basic filename/directory/symlink checking may be done (and I personally do) via realpath() ...
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">if (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">])) {
<br />    </span><span class="default">$base </span><span class="keyword">= </span><span class="string">'/home/polizei/public_html/'</span><span class="keyword">;  </span><span class="comment">// it seems this one is good to be realpath too.. meaning not a symlinked path..
<br />    </span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$file </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$base</span><span class="keyword">.</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">]), </span><span class="default">$base</span><span class="keyword">) === </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {
<br />        </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />    } else {
<br />        die(</span><span class="string">'blah!'</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="17978">  <div class="votes">
    <div id="Vu17978">
    <a href="/manual/vote-note.php?id=17978&amp;page=security.filesystem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17978">
    <a href="/manual/vote-note.php?id=17978&amp;page=security.filesystem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17978" title="53% like this...">
    5
    </div>
  </div>
  <a href="#17978" class="name">
  <strong class="user"><em>cronos586(AT)caramail(DOT)com</em></strong></a><a class="genanchor" href="#17978"> &para;</a><div class="date" title="2002-01-05 03:48"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17978">
<div class="phpcode"><code><span class="html">when using Apache you might consider a apache_lookup_uri on the path, to discover the real path, regardless of any directory trickery.<br />then, look at the prefix, and compare with a list of allowed prefixes.<br />for example, my source.php for my website includes:<br />if(isset($doc)) {<br />    $apacheres = apache_lookup_uri($doc);<br />    $really = realpath($apacheres-&gt;filename);<br />    if(substr($really, 0, strlen($DOCUMENT_ROOT)) == $DOCUMENT_ROOT) {<br />        if(is_file($really)) {<br />            show_source($really);<br />        }<br />    }<br />}<br />hope this helps<br />regards,<br />KAT44</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=security.filesystem&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.filesystem.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="security.php">Security</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="security.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="security.general.php" title="General considerations">General considerations</a>
                        </li>
                                                <li class="">
                            <a href="security.cgi-bin.php" title="Installed as CGI binary">Installed as CGI binary</a>
                        </li>
                                                <li class="">
                            <a href="security.apache.php" title="Installed as an Apache module">Installed as an Apache module</a>
                        </li>
                                                <li class="">
                            <a href="security.sessions.php" title="Session Security">Session Security</a>
                        </li>
                                                <li class="current">
                            <a href="security.filesystem.php" title="Filesystem Security">Filesystem Security</a>
                        </li>
                                                <li class="">
                            <a href="security.database.php" title="Database Security">Database Security</a>
                        </li>
                                                <li class="">
                            <a href="security.errors.php" title="Error Reporting">Error Reporting</a>
                        </li>
                                                <li class="">
                            <a href="security.variables.php" title="User Submitted Data">User Submitted Data</a>
                        </li>
                                                <li class="">
                            <a href="security.hiding.php" title="Hiding PHP">Hiding PHP</a>
                        </li>
                                                <li class="">
                            <a href="security.current.php" title="Keeping Current">Keeping Current</a>
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
