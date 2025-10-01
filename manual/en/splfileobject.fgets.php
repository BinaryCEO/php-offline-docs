<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplFileObject::fgets - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/splfileobject.fgets.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/splfileobject.fgets.php">
 <link rel="alternate" href="https://www.php.net/manual/en/splfileobject.fgets.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.splfileobject.php">
 <link rel="prev" href="https://www.php.net/manual/en/splfileobject.fgetcsv.php">
 <link rel="next" href="https://www.php.net/manual/en/splfileobject.fgetss.php">

 <link rel="alternate" href="https://www.php.net/manual/en/splfileobject.fgets.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/splfileobject.fgets.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/splfileobject.fgets.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/splfileobject.fgets.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/splfileobject.fgets.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/splfileobject.fgets.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/splfileobject.fgets.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/splfileobject.fgets.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/splfileobject.fgets.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/splfileobject.fgets.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/splfileobject.fgets.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets line from file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplFileObject::fgets - Manual" />
<meta name="twitter:description" content="Gets line from file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplFileObject::fgets - Manual" />
<meta itemprop="description" content="Gets line from file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets line from file" />

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
        <a href="splfileobject.fgetss.php">
          SplFileObject::fgetss &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="splfileobject.fgetcsv.php">
          &laquo; SplFileObject::fgetcsv        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.files.php'>File Handling</a></li>      <li><a href='class.splfileobject.php'>SplFileObject</a></li>      </ul>
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
            <option value='en/splfileobject.fgets.php' selected="selected">English</option>
            <option value='de/splfileobject.fgets.php'>German</option>
            <option value='es/splfileobject.fgets.php'>Spanish</option>
            <option value='fr/splfileobject.fgets.php'>French</option>
            <option value='it/splfileobject.fgets.php'>Italian</option>
            <option value='ja/splfileobject.fgets.php'>Japanese</option>
            <option value='pt_BR/splfileobject.fgets.php'>Brazilian Portuguese</option>
            <option value='ru/splfileobject.fgets.php'>Russian</option>
            <option value='tr/splfileobject.fgets.php'>Turkish</option>
            <option value='uk/splfileobject.fgets.php'>Ukrainian</option>
            <option value='zh/splfileobject.fgets.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="splfileobject.fgets" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SplFileObject::fgets</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SplFileObject::fgets</span> &mdash; <span class="dc-title">Gets line from file</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-splfileobject.fgets-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SplFileObject::fgets</strong></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Gets a line from the file.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-splfileobject.fgets-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-splfileobject.fgets-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing the next line from the file.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-splfileobject.fgets-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws a <span class="classname"><a href="class.runtimeexception.php" class="classname">RuntimeException</a></span> if the file cannot be read.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-splfileobject.fgets-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3998">
    <p><strong>Example #1 <span class="methodname"><strong>SplFileObject::fgets()</strong></span> example</strong></p>
    <div class="example-contents"><p>This example simply outputs the contents of <code class="literal">file.txt</code> line-by-line.</p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$file </span><span style="color: #007700">= new </span><span style="color: #0000BB">SplFileObject</span><span style="color: #007700">(</span><span style="color: #DD0000">"file.txt"</span><span style="color: #007700">);<br />while (!</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">eof</span><span style="color: #007700">()) {<br />    echo </span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fgets</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-splfileobject.fgets-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fgets.php" class="function" rel="rdfs-seeAlso">fgets()</a> - Gets line from file pointer</span></li>
    <li><span class="methodname"><a href="splfileobject.fgetss.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::fgetss()</a> - Gets line from file and strip HTML tags</span></li>
    <li><span class="methodname"><a href="splfileobject.fgetc.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::fgetc()</a> - Gets character from file</span></li>
    <li><span class="methodname"><a href="splfileobject.current.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::current()</a> - Retrieve current line of file</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/splfileobject/fgets.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsplfileobject.fgets%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=splfileobject.fgets&amp;repo=en&amp;redirect=https://www.php.net/manual/en/splfileobject.fgets.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126525">  <div class="votes">
    <div id="Vu126525">
    <a href="/manual/vote-note.php?id=126525&amp;page=splfileobject.fgets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126525">
    <a href="/manual/vote-note.php?id=126525&amp;page=splfileobject.fgets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126525" title="100% like this...">
    5
    </div>
  </div>
  <a href="#126525" class="name">
  <strong class="user"><em>Lucas Bustamante</em></strong></a><a class="genanchor" href="#126525"> &para;</a><div class="date" title="2021-10-22 11:19"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126525">
<div class="phpcode"><code><span class="html">Notice that the behavior of fgets after a seek changed on PHP 8.0.10, if you seek to line 50 and run fgets, it will give you line 50, while on PHP 5.1~8.0.0 it would give you line 51:<br /><br /><span class="default">&lt;?php<br /><br />$file </span><span class="keyword">= new </span><span class="default">SplTempFileObject</span><span class="keyword">();<br /><br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">fwrite</span><span class="keyword">(</span><span class="string">"Foo </span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">seek</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">);<br /><br />echo </span><span class="default">json_encode</span><span class="keyword">(array(<br />    array(</span><span class="string">'line' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="string">'contents' </span><span class="keyword">=&gt; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">fgets</span><span class="keyword">())),<br />    array(</span><span class="string">'line' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="string">'contents' </span><span class="keyword">=&gt; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">fgets</span><span class="keyword">())),<br />    array(</span><span class="string">'line' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="string">'contents' </span><span class="keyword">=&gt; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">fgets</span><span class="keyword">())),<br />), </span><span class="default">JSON_PRETTY_PRINT</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Results:<br /><br />PHP  8.0.1+<br />[<br />    {<br />        "line": 50,<br />        "contents": "Foo 50"<br />    },<br />    {<br />        "line": 50,<br />        "contents": "Foo 51"<br />    },<br />    {<br />        "line": 51,<br />        "contents": "Foo 52"<br />    }<br />]<br /><br />PHP 5.1 to 8.0.0<br />[<br />    {<br />        "line": 50,<br />        "contents": "Foo 51"<br />    },<br />    {<br />        "line": 51,<br />        "contents": "Foo 52"<br />    },<br />    {<br />        "line": 52,<br />        "contents": "Foo 53"<br />    }<br />]</span></code></div>
  </div>
 </div>
  <div class="note" id="122300">  <div class="votes">
    <div id="Vu122300">
    <a href="/manual/vote-note.php?id=122300&amp;page=splfileobject.fgets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122300">
    <a href="/manual/vote-note.php?id=122300&amp;page=splfileobject.fgets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122300" title="85% like this...">
    5
    </div>
  </div>
  <a href="#122300" class="name">
  <strong class="user"><em>Chris Johnson</em></strong></a><a class="genanchor" href="#122300"> &para;</a><div class="date" title="2018-01-22 09:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122300">
<div class="phpcode"><code><span class="html">Note that this method will cause a PHP fatal error if the file being read contains no recognizable line termination characters and is larger than the allowable memory size for PHP to allocate, i.e. memory_limit set in php.ini or similar.  In other words, PHP keeps reading until it finds a line termination, if it runs out of memory first, it will throw a fatal error.<br /><br />This is different from the file resource fread() function, which allows an optional maximum length argument to be passed to limit this behavior.</span></code></div>
  </div>
 </div>
  <div class="note" id="126526">  <div class="votes">
    <div id="Vu126526">
    <a href="/manual/vote-note.php?id=126526&amp;page=splfileobject.fgets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126526">
    <a href="/manual/vote-note.php?id=126526&amp;page=splfileobject.fgets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126526" title="83% like this...">
    4
    </div>
  </div>
  <a href="#126526" class="name">
  <strong class="user"><em>Lucas Bustamante</em></strong></a><a class="genanchor" href="#126526"> &para;</a><div class="date" title="2021-10-22 11:34"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126526">
<div class="phpcode"><code><span class="html">I forgot to mention in my previous note about PHP PHP 8.0.10, that you can use $file-&gt;current(); $file-&gt;next(); as a replacement for $file-&gt;fgets(); that works consistently from PHP 5.1 to 8.0.1+ after a seek():<br /><br /><span class="default">&lt;?php<br /><br />$file </span><span class="keyword">= new </span><span class="default">SplTempFileObject</span><span class="keyword">();<br /><br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">fwrite</span><span class="keyword">(</span><span class="string">"Foo </span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">seek</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(array(<br />    array(</span><span class="string">'line' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="string">'contents' </span><span class="keyword">=&gt; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()), </span><span class="string">'triggerNext' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()),<br />    array(</span><span class="string">'line' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="string">'contents' </span><span class="keyword">=&gt; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()), </span><span class="string">'triggerNext' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()),<br />    array(</span><span class="string">'line' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="string">'contents' </span><span class="keyword">=&gt; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()), </span><span class="string">'triggerNext' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()),<br />));<br /><br /></span><span class="default">?&gt;<br /></span><br />PHP 5.1 to 8.0.1+:<br /><br />[<br />    {<br />        "line": 50,<br />        "contents": "Foo 50"<br />    },<br />    {<br />        "line": 51,<br />        "contents": "Foo 51"<br />    },<br />    {<br />        "line": 52,<br />        "contents": "Foo 52"<br />    }<br />]</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=splfileobject.fgets&amp;repo=en&amp;redirect=https://www.php.net/manual/en/splfileobject.fgets.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.splfileobject.php">SplFileObject</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="splfileobject.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.eof.php" title="eof">eof</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="current">
                            <a href="splfileobject.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.getchildren.php" title="getChildren">getChildren</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.getcsvcontrol.php" title="getCsvControl">getCsvControl</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.getcurrentline.php" title="getCurrentLine">getCurrentLine</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.getflags.php" title="getFlags">getFlags</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.getmaxlinelen.php" title="getMaxLineLen">getMaxLineLen</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.haschildren.php" title="hasChildren">hasChildren</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.seek.php" title="seek">seek</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.setcsvcontrol.php" title="setCsvControl">setCsvControl</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.setflags.php" title="setFlags">setFlags</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.setmaxlinelen.php" title="setMaxLineLen">setMaxLineLen</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="splfileobject.valid.php" title="valid">valid</a>
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
