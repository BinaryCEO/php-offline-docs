<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: $_COOKIE - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reserved.variables.cookies.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reserved.variables.cookies.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.cookies.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.variables.php">
 <link rel="prev" href="https://www.php.net/manual/en/reserved.variables.environment.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.variables.phperrormsg.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.cookies.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reserved.variables.cookies.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reserved.variables.cookies.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reserved.variables.cookies.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reserved.variables.cookies.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reserved.variables.cookies.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reserved.variables.cookies.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reserved.variables.cookies.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reserved.variables.cookies.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reserved.variables.cookies.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reserved.variables.cookies.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="HTTP Cookies" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: $_COOKIE - Manual" />
<meta name="twitter:description" content="HTTP Cookies" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: $_COOKIE - Manual" />
<meta itemprop="description" content="HTTP Cookies" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="HTTP Cookies" />

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
        <a href="reserved.variables.phperrormsg.php">
          $php_errormsg &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reserved.variables.environment.php">
          &laquo; $_ENV        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.variables.php'>Predefined Variables</a></li>      </ul>
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
            <option value='en/reserved.variables.cookies.php' selected="selected">English</option>
            <option value='de/reserved.variables.cookies.php'>German</option>
            <option value='es/reserved.variables.cookies.php'>Spanish</option>
            <option value='fr/reserved.variables.cookies.php'>French</option>
            <option value='it/reserved.variables.cookies.php'>Italian</option>
            <option value='ja/reserved.variables.cookies.php'>Japanese</option>
            <option value='pt_BR/reserved.variables.cookies.php'>Brazilian Portuguese</option>
            <option value='ru/reserved.variables.cookies.php'>Russian</option>
            <option value='tr/reserved.variables.cookies.php'>Turkish</option>
            <option value='uk/reserved.variables.cookies.php'>Ukrainian</option>
            <option value='zh/reserved.variables.cookies.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reserved.variables.cookies" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">$_COOKIE</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">$_COOKIE</span> &mdash; <span class="dc-title">HTTP Cookies</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-reserved.variables.cookies-description">
  <h3 class="title">Description</h3>
  <p class="para">
   An associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of variables passed to the current script
   via HTTP Cookies. 
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-reserved.variables.cookies-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="variable.cookie.basic">
    <p><strong>Example #1 <var class="varname">$_COOKIE</var> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Hello ' </span><span style="color: #007700">. </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">[</span><span style="color: #DD0000">"name"</span><span style="color: #007700">]) . </span><span style="color: #DD0000">'!'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Assuming the &quot;name&quot; cookie has been set earlier
    </p></div>
    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Hello Hannes!</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-reserved.variables.cookies-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This is a &#039;superglobal&#039;, or
automatic global, variable. This simply means that it is available in
all scopes throughout a script. There is no need to do
<strong class="command">global $variable;</strong> to access it within functions or methods.
</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-reserved.variables.cookies-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.setcookie.php" class="function" rel="rdfs-seeAlso">setcookie()</a> - Send a cookie</span></li>
    <li><a href="language.variables.external.php" class="link">Handling external variables</a></li>
    <li><a href="book.filter.php" class="link">The filter extension</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/variables/cookie.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freserved.variables.cookies%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reserved.variables.cookies&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.cookies.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119381">  <div class="votes">
    <div id="Vu119381">
    <a href="/manual/vote-note.php?id=119381&amp;page=reserved.variables.cookies&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119381">
    <a href="/manual/vote-note.php?id=119381&amp;page=reserved.variables.cookies&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119381" title="60% like this...">
    84
    </div>
  </div>
  <a href="#119381" class="name">
  <strong class="user"><em>kiril (at) atern (dot) us</em></strong></a><a class="genanchor" href="#119381"> &para;</a><div class="date" title="2016-05-24 12:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119381">
<div class="phpcode"><code><span class="html">To clarify the previously posted note:<br /><br />Dots (.) and spaces ( ) in cookie names are being replaced with underscores (_).</span></code></div>
  </div>
 </div>
  <div class="note" id="117377">  <div class="votes">
    <div id="Vu117377">
    <a href="/manual/vote-note.php?id=117377&amp;page=reserved.variables.cookies&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117377">
    <a href="/manual/vote-note.php?id=117377&amp;page=reserved.variables.cookies&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117377" title="60% like this...">
    80
    </div>
  </div>
  <a href="#117377" class="name">
  <strong class="user"><em>k dot andris at gmail dot com</em></strong></a><a class="genanchor" href="#117377"> &para;</a><div class="date" title="2015-05-29 08:49"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117377">
<div class="phpcode"><code><span class="html">beware, dots (.) in cookie names are replaces by underscores (_)</span></code></div>
  </div>
 </div>
  <div class="note" id="128065">  <div class="votes">
    <div id="Vu128065">
    <a href="/manual/vote-note.php?id=128065&amp;page=reserved.variables.cookies&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128065">
    <a href="/manual/vote-note.php?id=128065&amp;page=reserved.variables.cookies&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128065" title="63% like this...">
    10
    </div>
  </div>
  <a href="#128065" class="name">
  <strong class="user"><em>rc at opelgt dot org</em></strong></a><a class="genanchor" href="#128065"> &para;</a><div class="date" title="2022-12-29 07:04"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128065">
<div class="phpcode"><code><span class="html">The values of $_COOKIE in general are not identic with the values in $_SERVER["HTTP_COOKIE"]!<br /><br />In phpinfo() $_SERVER["HTTP_COOKIE"] shows the actual value stored in the cookie by the browser in 7bit.<br />In $_COOKIE is this value after a 7bit to 8bit conversion.<br /><br />When all characters in $_SERVER["HTTP_COOKIE"] are in ASCII = 7bit, $_COOKIE is displayed in phpinfo(). When one single character is not in ASCII, phpinfo() shows no value!<br /><br />Although in $_COOKIE is still the 8bit conversion of $_SERVER["HTTP_COOKIE"]!<br />The reason: the 8bit conversion alone is not enough to say what characters are meant.<br />For that the used character-set is necessary.<br /><br />phpinfo() does not know the character-set and better says nothing.<br /><br />When using $_COOKIE in a php-generated web page the environment has the info of used character-set and so the meant characters can be displayed.<br /><br />Three illustrating examples<br />===========================<br />A HTML-form is used to get the content which shall be stored in a cookie named "test".<br /><br />Input string in field "test": door<br />$_SERVER["HTTP_COOKIE"]: test=door<br />$_COOKIE["test"]<br />   displayed in phpinfo(): door<br />   displayed in any html page: door<br /><br />Input string in field "test" (ISO-8859-1 used in form): Tür<br />$_SERVER["HTTP_COOKIE"]: test=T%FCr<br />$_COOKIE["test"]<br />   displayed in phpinfo(): ""<br />   displayed in a ISO-8859-1-html-page: Tür<br />   (displayed in a UTF-8-html-page: T�r)<br /><br />Input string in field "test" (UTF-8 used in form): Tür<br />$_SERVER["HTTP_COOKIE"]: test=T%C3%BCr<br />$_COOKIE["test"]<br />   displayed in phpinfo(): ""<br />   displayed in a UTF-8-html-page: Tür<br />   (displayed in a ISO-8859-1-html-page: TÃ¼r)</span></code></div>
  </div>
 </div>
  <div class="note" id="127990">  <div class="votes">
    <div id="Vu127990">
    <a href="/manual/vote-note.php?id=127990&amp;page=reserved.variables.cookies&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127990">
    <a href="/manual/vote-note.php?id=127990&amp;page=reserved.variables.cookies&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127990" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127990" class="name">
  <strong class="user"><em>user at NOSPAM dot example dot com</em></strong></a><a class="genanchor" href="#127990"> &para;</a><div class="date" title="2022-12-07 12:26"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127990">
<div class="phpcode"><code><span class="html">PHP replaces dots (.) with underscores (_). To find all original cookie names (and value) you can use $_SERVER['HTTP_COOKIE'].<br /><br />For example to retrieve a cookie set with <span class="default">&lt;?php setcookie</span><span class="keyword">(</span><span class="string">'testing.dots'</span><span class="keyword">, </span><span class="string">'value'</span><span class="keyword">); </span><span class="default">?&gt;</span> you may use:<br /><span class="default">&lt;?php<br />    $cookies </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'; '</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_COOKIE'</span><span class="keyword">]);<br />    </span><span class="default">$allCookies </span><span class="keyword">= [];<br /><br />    foreach(</span><span class="default">$cookies </span><span class="keyword">as </span><span class="default">$cookie</span><span class="keyword">) {<br />        </span><span class="default">$keyAndValue </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">$cookie</span><span class="keyword">);<br />        </span><span class="default">$allCookies</span><span class="keyword">[</span><span class="default">$keyAndValue</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]] = </span><span class="default">$keyAndValue</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$allCookies</span><span class="keyword">);<br />    </span><span class="comment">/*<br />        array(1) {<br />            ["testing.dots"]=&gt;<br />                string(5) "value"<br />        }<br />    */<br /><br />    </span><span class="keyword">echo </span><span class="default">$allCookies</span><span class="keyword">[</span><span class="string">'testing.dots'</span><span class="keyword">];<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reserved.variables.cookies&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.cookies.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.variables.php">Predefined Variables</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.variables.superglobals.php" title="Superglobals">Superglobals</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.globals.php" title="$GLOBALS">$GLOBALS</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.server.php" title="$_&#8203;SERVER">$_&#8203;SERVER</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.get.php" title="$_&#8203;GET">$_&#8203;GET</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.post.php" title="$_&#8203;POST">$_&#8203;POST</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.files.php" title="$_&#8203;FILES">$_&#8203;FILES</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.request.php" title="$_&#8203;REQUEST">$_&#8203;REQUEST</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.session.php" title="$_&#8203;SESSION">$_&#8203;SESSION</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.environment.php" title="$_&#8203;ENV">$_&#8203;ENV</a>
                        </li>
                                                <li class="current">
                            <a href="reserved.variables.cookies.php" title="$_&#8203;COOKIE">$_&#8203;COOKIE</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.httpresponseheader.php" title="$http_&#8203;response_&#8203;header">$http_&#8203;response_&#8203;header</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.argc.php" title="$argc">$argc</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.argv.php" title="$argv">$argv</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="reserved.variables.phperrormsg.php" title="$php_&#8203;errormsg">$php_&#8203;errormsg</a>
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
