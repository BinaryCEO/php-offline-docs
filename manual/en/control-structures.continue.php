<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: continue - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/control-structures.continue.php">
 <link rel="shorturl" href="https://www.php.net/continue">
 <link rel="alternate" href="https://www.php.net/continue" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/en/control-structures.break.php">
 <link rel="next" href="https://www.php.net/manual/en/control-structures.switch.php">

 <link rel="alternate" href="https://www.php.net/manual/en/control-structures.continue.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/control-structures.continue.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/control-structures.continue.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/control-structures.continue.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/control-structures.continue.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/control-structures.continue.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/control-structures.continue.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/control-structures.continue.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/control-structures.continue.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/control-structures.continue.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/control-structures.continue.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="continue" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: continue - Manual" />
<meta name="twitter:description" content="continue" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: continue - Manual" />
<meta itemprop="description" content="continue" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="continue" />

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
        <a href="control-structures.switch.php">
          switch &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="control-structures.break.php">
          &laquo; break        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.control-structures.php'>Control Structures</a></li>      </ul>
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
            <option value='en/control-structures.continue.php' selected="selected">English</option>
            <option value='de/control-structures.continue.php'>German</option>
            <option value='es/control-structures.continue.php'>Spanish</option>
            <option value='fr/control-structures.continue.php'>French</option>
            <option value='it/control-structures.continue.php'>Italian</option>
            <option value='ja/control-structures.continue.php'>Japanese</option>
            <option value='pt_BR/control-structures.continue.php'>Brazilian Portuguese</option>
            <option value='ru/control-structures.continue.php'>Russian</option>
            <option value='tr/control-structures.continue.php'>Turkish</option>
            <option value='uk/control-structures.continue.php'>Ukrainian</option>
            <option value='zh/control-structures.continue.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="control-structures.continue" class="sect1">
 <h2 class="title">continue</h2>
 <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p>
 <p class="simpara">
  <code class="literal">continue</code> is used within looping structures to
  skip the rest of the current loop iteration and continue execution
  at the condition evaluation and then the beginning of the next iteration.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   In PHP the
   <a href="control-structures.switch.php" class="link">switch</a> statement is
   considered a looping structure for the purposes of
   <code class="literal">continue</code>. <code class="literal">continue</code> behaves like
   <code class="literal">break</code> (when no arguments are passed) but will
   raise a warning as this is likely to be a mistake. If a 
   <code class="literal">switch</code> is inside a loop,
   <code class="literal">continue 2</code> will continue with the next iteration
   of the outer loop.
  </span>
 </p></blockquote>
 <p class="simpara">
  <code class="literal">continue</code> accepts an optional numeric argument
  which tells it how many levels of enclosing loops it should skip
  to the end of. The default value is <code class="literal">1</code>, thus skipping
  to the end of the current loop.
 </p>
 <p class="para">
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arr </span><span style="color: #007700">= [</span><span style="color: #DD0000">'zero'</span><span style="color: #007700">, </span><span style="color: #DD0000">'one'</span><span style="color: #007700">, </span><span style="color: #DD0000">'two'</span><span style="color: #007700">, </span><span style="color: #DD0000">'three'</span><span style="color: #007700">, </span><span style="color: #DD0000">'four'</span><span style="color: #007700">, </span><span style="color: #DD0000">'five'</span><span style="color: #007700">, </span><span style="color: #DD0000">'six'</span><span style="color: #007700">];<br />foreach (</span><span style="color: #0000BB">$arr </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">0 </span><span style="color: #007700">=== (</span><span style="color: #0000BB">$key </span><span style="color: #007700">% </span><span style="color: #0000BB">2</span><span style="color: #007700">)) { </span><span style="color: #FF8000">// skip members with even key<br />        </span><span style="color: #007700">continue;<br />    }<br />    echo </span><span style="color: #0000BB">$value </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above examples will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
one
three
five
</pre></div>
   </div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />while (</span><span style="color: #0000BB">$i</span><span style="color: #007700">++ &lt; </span><span style="color: #0000BB">5</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Outer\n"</span><span style="color: #007700">;<br />    while (</span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"Middle\n"</span><span style="color: #007700">;<br />        while (</span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />            echo </span><span style="color: #DD0000">"Inner\n"</span><span style="color: #007700">;<br />            continue </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />        }<br />        echo </span><span style="color: #DD0000">"This never gets output.\n"</span><span style="color: #007700">;<br />    }<br />    echo </span><span style="color: #DD0000">"Neither does this.\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above examples will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Outer
Middle
Inner
Outer
Middle
Inner
Outer
Middle
Inner
Outer
Middle
Inner
Outer
Middle
Inner
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  Omitting the semicolon after <code class="literal">continue</code> can lead to
  confusion. Here&#039;s an example of what you shouldn&#039;t do.
 </p>
 <p class="para">
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">5</span><span style="color: #007700">; ++</span><span style="color: #0000BB">$i</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">$i </span><span style="color: #007700">== </span><span style="color: #0000BB">2</span><span style="color: #007700">)<br />        continue<br />    print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">
    One can expect the result to be:
   </p>
   <div class="example-contents screen">
<div class="cdata"><pre>
0
1
3
4
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>Changelog for <code class="literal">continue</code></strong></caption>
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>7.3.0</td>
      <td>
       <code class="literal">continue</code> within a <code class="literal">switch</code> that is attempting to act like a <code class="literal">break</code> statement for the 
       <code class="literal">switch</code> will trigger an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/control-structures/continue.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontrol-structures.continue%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=control-structures.continue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.continue.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96945">  <div class="votes">
    <div id="Vu96945">
    <a href="/manual/vote-note.php?id=96945&amp;page=control-structures.continue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96945">
    <a href="/manual/vote-note.php?id=96945&amp;page=control-structures.continue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96945" title="75% like this...">
    144
    </div>
  </div>
  <a href="#96945" class="name">
  <strong class="user"><em>jaimthorn at yahoo dot com</em></strong></a><a class="genanchor" href="#96945"> &para;</a><div class="date" title="2010-03-24 06:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96945">
<div class="phpcode"><code><span class="html">The remark "in PHP the switch statement is considered a looping structure for the purposes of continue" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">3</span><span class="keyword">; ++ </span><span class="default">$i </span><span class="keyword">)<br />    {<br />        echo </span><span class="string">' ['</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="string">'] '</span><span class="keyword">;<br />        switch( </span><span class="default">$i </span><span class="keyword">)<br />        {<br />            case </span><span class="default">0</span><span class="keyword">: echo </span><span class="string">'zero'</span><span class="keyword">; break;<br />            case </span><span class="default">1</span><span class="keyword">: echo </span><span class="string">'one' </span><span class="keyword">; </span><span class="default">XXXX</span><span class="keyword">;<br />            case </span><span class="default">2</span><span class="keyword">: echo </span><span class="string">'two' </span><span class="keyword">; break;<br />        }<br />        echo </span><span class="string">' &lt;' </span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="string">'&gt; '</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />For XXXX I filled in<br /><br />- continue 1<br />- continue 2<br />- break 1<br />- break 2<br /><br />and observed the different results.  This made me come up with the following one-liner that describes the difference between break and continue:<br /><br />continue resumes execution just before the closing curly bracket ( } ), and break resumes execution just after the closing curly bracket.<br /><br />Corollary: since a switch is not (really) a looping structure, resuming execution just before a switch's closing curly bracket has the same effect as using a break statement.  In the case of (for, while, do-while) loops, resuming execution just prior their closing curly brackets means that a new iteration is started --which is of course very unlike the behavior of a break statement.<br /><br />In the one-liner above I ignored the existence of parameters to break/continue, but the one-liner is also valid when parameters are supplied.</span></code></div>
  </div>
 </div>
  <div class="note" id="90323">  <div class="votes">
    <div id="Vu90323">
    <a href="/manual/vote-note.php?id=90323&amp;page=control-structures.continue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90323">
    <a href="/manual/vote-note.php?id=90323&amp;page=control-structures.continue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90323" title="62% like this...">
    43
    </div>
  </div>
  <a href="#90323" class="name">
  <strong class="user"><em>Nikolay Ermolenko</em></strong></a><a class="genanchor" href="#90323"> &para;</a><div class="date" title="2009-04-16 05:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90323">
<div class="phpcode"><code><span class="html">Using continue and break:
<br />
<br /><span class="default">&lt;?php
<br />$stack </span><span class="keyword">= array(</span><span class="string">'first'</span><span class="keyword">, </span><span class="string">'second'</span><span class="keyword">, </span><span class="string">'third'</span><span class="keyword">, </span><span class="string">'fourth'</span><span class="keyword">, </span><span class="string">'fifth'</span><span class="keyword">);
<br />
<br />foreach(</span><span class="default">$stack </span><span class="keyword">AS </span><span class="default">$v</span><span class="keyword">){
<br />    if(</span><span class="default">$v </span><span class="keyword">== </span><span class="string">'second'</span><span class="keyword">)continue;
<br />    if(</span><span class="default">$v </span><span class="keyword">== </span><span class="string">'fourth'</span><span class="keyword">)break;
<br />    echo </span><span class="default">$v</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;
<br />}
<br /></span><span class="comment">/*
<br />
<br />first
<br />third
<br />
<br />*/
<br />
<br /></span><span class="default">$stack2 </span><span class="keyword">= array(</span><span class="string">'one'</span><span class="keyword">=&gt;</span><span class="string">'first'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">=&gt;</span><span class="string">'second'</span><span class="keyword">, </span><span class="string">'three'</span><span class="keyword">=&gt;</span><span class="string">'third'</span><span class="keyword">, </span><span class="string">'four'</span><span class="keyword">=&gt;</span><span class="string">'fourth'</span><span class="keyword">, </span><span class="string">'five'</span><span class="keyword">=&gt;</span><span class="string">'fifth'</span><span class="keyword">);
<br />foreach(</span><span class="default">$stack2 </span><span class="keyword">AS </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">){
<br />    if(</span><span class="default">$v </span><span class="keyword">== </span><span class="string">'second'</span><span class="keyword">)continue;
<br />    if(</span><span class="default">$k </span><span class="keyword">== </span><span class="string">'three'</span><span class="keyword">)continue;
<br />    if(</span><span class="default">$v </span><span class="keyword">== </span><span class="string">'fifth'</span><span class="keyword">)break;
<br />    echo </span><span class="default">$k</span><span class="keyword">.</span><span class="string">' ::: '</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;
<br />}
<br /></span><span class="comment">/*
<br />
<br />one ::: first
<br />four ::: fourth
<br />
<br />*/
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110900">  <div class="votes">
    <div id="Vu110900">
    <a href="/manual/vote-note.php?id=110900&amp;page=control-structures.continue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110900">
    <a href="/manual/vote-note.php?id=110900&amp;page=control-structures.continue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110900" title="60% like this...">
    23
    </div>
  </div>
  <a href="#110900" class="name">
  <strong class="user"><em>Koen</em></strong></a><a class="genanchor" href="#110900"> &para;</a><div class="date" title="2012-12-21 12:26"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110900">
<div class="phpcode"><code><span class="html">If you use a incrementing value in your loop, be sure to increment it before calling continue; or you might get an infinite loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="102657">  <div class="votes">
    <div id="Vu102657">
    <a href="/manual/vote-note.php?id=102657&amp;page=control-structures.continue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102657">
    <a href="/manual/vote-note.php?id=102657&amp;page=control-structures.continue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102657" title="54% like this...">
    18
    </div>
  </div>
  <a href="#102657" class="name">
  <strong class="user"><em>rjsteinert.com</em></strong></a><a class="genanchor" href="#102657"> &para;</a><div class="date" title="2011-02-26 09:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102657">
<div class="phpcode"><code><span class="html">The most basic example that print "13", skipping over 2.<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$number</span><span class="keyword">) {<br />  if(</span><span class="default">$number </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">) {<br />    continue;<br />  }<br />  print </span><span class="default">$number</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42282">  <div class="votes">
    <div id="Vu42282">
    <a href="/manual/vote-note.php?id=42282&amp;page=control-structures.continue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42282">
    <a href="/manual/vote-note.php?id=42282&amp;page=control-structures.continue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42282" title="57% like this...">
    14
    </div>
  </div>
  <a href="#42282" class="name">
  <strong class="user"><em>www.derosetechnologies.com</em></strong></a><a class="genanchor" href="#42282"> &para;</a><div class="date" title="2004-05-10 08:58"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42282">
<div class="phpcode"><code><span class="html">In the same way that one can append a number to the end of a break statement to indicate the "loop" level upon which one wishes to 'break' , one can append a number to the end of a 'continue' statement to acheive the same goal. Here's a quick example:<br /><br />&lt;?<br />    for ($i = 0;$i&lt;3;$i++) {<br />        echo "Start Of I loop\n";<br />        for ($j=0;;$j++) {<br />            <br />            if ($j &gt;= 2) continue 2; // This "continue" applies to the "$i" loop <br />            echo "I : $i J : $j"."\n";<br />        }<br />        echo "End\n";<br />    }<br />?&gt;<br /><br />The output here is:<br />Start Of I loop<br />I : 0 J : 0<br />I : 0 J : 1<br />Start Of I loop<br />I : 1 J : 0<br />I : 1 J : 1<br />Start Of I loop<br />I : 2 J : 0<br />I : 2 J : 1<br /><br />For more information, see the php manual's entry for the 'break' statement.</span></code></div>
  </div>
 </div>
  <div class="note" id="80075">  <div class="votes">
    <div id="Vu80075">
    <a href="/manual/vote-note.php?id=80075&amp;page=control-structures.continue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80075">
    <a href="/manual/vote-note.php?id=80075&amp;page=control-structures.continue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80075" title="51% like this...">
    2
    </div>
  </div>
  <a href="#80075" class="name">
  <strong class="user"><em>Geekman</em></strong></a><a class="genanchor" href="#80075"> &para;</a><div class="date" title="2007-12-27 05:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80075">
<div class="phpcode"><code><span class="html">For clarification, here are some examples of continue used in a while/do-while loop, showing that it has no effect on the conditional evaluation element.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Outputs "1 ".<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">$i </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$i</span><span class="keyword">++;<br />    echo </span><span class="string">"</span><span class="default">$i</span><span class="string"> "</span><span class="keyword">;<br />    if (</span><span class="default">$i </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) continue;<br />}<br /><br /></span><span class="comment">// Outputs "1 2 ".<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />do {<br />    </span><span class="default">$i</span><span class="keyword">++;<br />    echo </span><span class="string">"</span><span class="default">$i</span><span class="string"> "</span><span class="keyword">;<br />    if (</span><span class="default">$i </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">) continue;<br />} while (</span><span class="default">$i </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Both code snippets would behave exactly the same without continue.</span></code></div>
  </div>
 </div>
  <div class="note" id="71892">  <div class="votes">
    <div id="Vu71892">
    <a href="/manual/vote-note.php?id=71892&amp;page=control-structures.continue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71892">
    <a href="/manual/vote-note.php?id=71892&amp;page=control-structures.continue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71892" title="47% like this...">
    -3
    </div>
  </div>
  <a href="#71892" class="name">
  <strong class="user"><em>tufan dot oezduman at gmail dot com</em></strong></a><a class="genanchor" href="#71892"> &para;</a><div class="date" title="2006-12-21 04:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71892">
<div class="phpcode"><code><span class="html">a possible explanation for the behavior of continue in included scripts mentioned by greg and dedlfix above may be the following line of the "return" documentation: "If the current script file was include()ed or require()ed, then control is passed back to the calling file." <br />The example of greg produces an error since page2.php does not contain any loop-operations. <br /><br />So the only way to give the control back to the loop-operation  in page1.php would be a return.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=control-structures.continue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.continue.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Control Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.alternative-syntax.php" title="Alternative syntax for control structures">Alternative syntax for control structures</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="current">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.goto.php" title="goto">goto</a>
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
