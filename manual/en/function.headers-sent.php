<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: headers_sent - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.headers-sent.php">
 <link rel="shorturl" href="https://www.php.net/headers-sent">
 <link rel="alternate" href="https://www.php.net/headers-sent" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.headers-list.php">
 <link rel="next" href="https://www.php.net/manual/en/function.http-clear-last-response-headers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.headers-sent.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.headers-sent.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.headers-sent.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.headers-sent.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.headers-sent.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.headers-sent.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.headers-sent.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.headers-sent.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.headers-sent.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.headers-sent.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.headers-sent.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks if or where headers have been sent" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: headers_sent - Manual" />
<meta name="twitter:description" content="Checks if or where headers have been sent" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: headers_sent - Manual" />
<meta itemprop="description" content="Checks if or where headers have been sent" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks if or where headers have been sent" />

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
        <a href="function.http-clear-last-response-headers.php">
          http_clear_last_response_headers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.headers-list.php">
          &laquo; headers_list        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.network.php'>Network</a></li>      <li><a href='ref.network.php'>Network Functions</a></li>      </ul>
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
            <option value='en/function.headers-sent.php' selected="selected">English</option>
            <option value='de/function.headers-sent.php'>German</option>
            <option value='es/function.headers-sent.php'>Spanish</option>
            <option value='fr/function.headers-sent.php'>French</option>
            <option value='it/function.headers-sent.php'>Italian</option>
            <option value='ja/function.headers-sent.php'>Japanese</option>
            <option value='pt_BR/function.headers-sent.php'>Brazilian Portuguese</option>
            <option value='ru/function.headers-sent.php'>Russian</option>
            <option value='tr/function.headers-sent.php'>Turkish</option>
            <option value='uk/function.headers-sent.php'>Ukrainian</option>
            <option value='zh/function.headers-sent.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.headers-sent" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">headers_sent</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">headers_sent</span> &mdash; <span class="dc-title">Checks if or where headers have been sent</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.headers-sent-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>headers_sent</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter reference">&$filename</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$line</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Checks if or where headers have been sent.
  </p>
  <p class="para">
   You can&#039;t add any more header lines using the <span class="function"><a href="function.header.php" class="function">header()</a></span>
   function once the header block has already been sent. Using this function
   you can at least prevent getting HTTP header related error messages.
   Another option is to use <a href="ref.outcontrol.php" class="link">Output Buffering</a>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.headers-sent-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       If the optional <code class="parameter">filename</code> and
       <code class="parameter">line</code> parameters are set, 
       <span class="function"><strong>headers_sent()</strong></span> will put the PHP source file name
       and line number where output started in the <code class="parameter">filename</code>
       and <code class="parameter">line</code> variables.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If the output has started before executing the PHP source file (for example due to a startup error),
        the <code class="parameter">filename</code> parameter will be set to an empty string.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">line</code></dt>
     <dd>
      <p class="para">
       The line number where the output started.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.headers-sent-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>headers_sent()</strong></span> will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if no HTTP headers
   have already been sent or <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> otherwise.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.headers-sent-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4732">
    <p><strong>Example #1 Examples using <span class="function"><strong>headers_sent()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// If no headers are sent, send one<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">headers_sent</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Location: http://www.example.com/'</span><span style="color: #007700">);<br />    exit;<br />}<br /><br /></span><span style="color: #FF8000">// An example using the optional file and line parameters<br />// Note that $filename and $linenum are passed in for later use.<br />// Do not assign them values beforehand.<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">headers_sent</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #0000BB">$linenum</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Location: http://www.example.com/'</span><span style="color: #007700">);<br />    exit;<br /><br /></span><span style="color: #FF8000">// You would most likely trigger an error here.<br /></span><span style="color: #007700">} else {<br /><br />    echo </span><span style="color: #DD0000">"Headers already sent in </span><span style="color: #0000BB">$filename</span><span style="color: #DD0000"> on line </span><span style="color: #0000BB">$linenum</span><span style="color: #DD0000">\n" </span><span style="color: #007700">.<br />          </span><span style="color: #DD0000">"Cannot redirect, for now please click this &lt;a " </span><span style="color: #007700">.<br />          </span><span style="color: #DD0000">"href=\"http://www.example.com\"&gt;link&lt;/a&gt; instead\n"</span><span style="color: #007700">;<br />    exit;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.headers-sent-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Headers will only be accessible and output when a SAPI that supports them
    is in use.
   </p>
  </p></blockquote>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.headers-sent-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ob-start.php" class="function" rel="rdfs-seeAlso">ob_start()</a> - Turn on output buffering</span></li>
    <li><span class="function"><a href="function.trigger-error.php" class="function" rel="rdfs-seeAlso">trigger_error()</a> - Generates a user-level error/warning/notice message</span></li>
    <li><span class="function"><a href="function.headers-list.php" class="function" rel="rdfs-seeAlso">headers_list()</a> - Returns a list of response headers sent (or ready to send)</span></li>
    <li>
     <span class="function"><a href="function.header.php" class="function" rel="rdfs-seeAlso">header()</a> - Send a raw HTTP header</span> for a more detailed discussion of the
     matters involved.
    </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/headers-sent.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.headers-sent%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.headers-sent&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.headers-sent.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86488">  <div class="votes">
    <div id="Vu86488">
    <a href="/manual/vote-note.php?id=86488&amp;page=function.headers-sent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86488">
    <a href="/manual/vote-note.php?id=86488&amp;page=function.headers-sent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86488" title="81% like this...">
    14
    </div>
  </div>
  <a href="#86488" class="name">
  <strong class="user"><em>yesmarklapointe at hotmail dot com</em></strong></a><a class="genanchor" href="#86488"> &para;</a><div class="date" title="2008-10-21 06:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86488">
<div class="phpcode"><code><span class="html">I was having trouble getting my mind around the concepts involved. Here is my dilemma and the conclusion I reached in case recounting them can help others:<br /><br />I am using WAMPserver: PHP 5.2.6, and Apache 2.2.8 on Windows XP SP3. If it matters to your duplication, <br />I found two php.ini files in WAMPserver where output_buffering had been set to 4096. I changed them to OFF for this testing. <br /><br />Here is how you can replicate what I am experiencing: With IE 7.0 go to Tools ... Display ieHTTPheaders ... and run the following script repeatedly and watch what happens:<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">( </span><span class="string">'Expires: Mon, 26 Jul 1998 05:00:00 GMT' </span><span class="keyword">);<br /></span><span class="comment">//var_dump(headers_sent());<br />//print("whatever");<br />//flush();<br />//echo "whatever";<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">headers_sent</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />Result: the final var_dump of the headers_sent() function will <br />always return FALSE unless any one or  more of the commented lines above it are uncommented. Uncommenting the statements allows an output to be sent to the user not just to their browser, after which the final var_dump will return TRUE. What I found confusing was that the ieHTTPheaders tool shows that the header is being sent to the user's browser even when all the output lines are commented out. So why does headers_sent() return FALSE in this case? Because you can keep sending other headers. The headers_sent function is meant to alert one to when no further headers can be sent. My testing shows it does not return true unless some other output is also sent after the header, thereby signaling that  "Headers have been sent and concluded with user output. NOW you can't send any more headers."<br /><br />Someone else worked his way through this problem in a (false) bug report: <a href="http://bugs.php.net/bug.php?id=30264" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=30264</a><br />Here is the relevant part of the reply from the pro:<br />"When you use compression the entire page is buffered in memory, until end of the request. Consequently you can send headers at any time because no data is being actually sent to user when you print it. Until PHP actually decides to send any page output to the user you can still send additional headers which is why the headers_sent() function is returning false. It will return true, indicating that headers have been sent  only at a time when output began going to the user and you no longer can send any additional headers."<br /><br />So in summary, my point is that there is a difference between headers being sent only to the browser (which can be followed by other headers) vs. headers being sent and concluded by output for the user. The function should have been given a more clear name like headers_concluded().</span></code></div>
  </div>
 </div>
  <div class="note" id="60450">  <div class="votes">
    <div id="Vu60450">
    <a href="/manual/vote-note.php?id=60450&amp;page=function.headers-sent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60450">
    <a href="/manual/vote-note.php?id=60450&amp;page=function.headers-sent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60450" title="62% like this...">
    24
    </div>
  </div>
  <a href="#60450" class="name">
  <strong class="user"><em>Jakob B.</em></strong></a><a class="genanchor" href="#60450"> &para;</a><div class="date" title="2006-01-07 03:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60450">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">redirect</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {<br />    if (!</span><span class="default">headers_sent</span><span class="keyword">())<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: '</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">);<br />    else {<br />        echo </span><span class="string">'&lt;script type="text/javascript"&gt;'</span><span class="keyword">;<br />        echo </span><span class="string">'window.location.href="'</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">.</span><span class="string">'";'</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;/script&gt;'</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;noscript&gt;'</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;meta http-equiv="refresh" content="0;url='</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">.</span><span class="string">'" /&gt;'</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;/noscript&gt;'</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">redirect</span><span class="keyword">(</span><span class="string">'<a href="http://www.google.com" rel="nofollow" target="_blank">http://www.google.com</a>'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40318">  <div class="votes">
    <div id="Vu40318">
    <a href="/manual/vote-note.php?id=40318&amp;page=function.headers-sent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40318">
    <a href="/manual/vote-note.php?id=40318&amp;page=function.headers-sent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40318" title="66% like this...">
    2
    </div>
  </div>
  <a href="#40318" class="name">
  <strong class="user"><em>php at fufachew dot REMOVEME dot com</em></strong></a><a class="genanchor" href="#40318"> &para;</a><div class="date" title="2004-02-28 11:26"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40318">
<div class="phpcode"><code><span class="html">RE: antti at haapakangas dot net's post<br /><br />I've changed the code so $_SERVER['SERVER_NAME'] is used if $_SERVER['HTTP_HOST'] is not set.  $_SERVER['SERVER_NAME'] doesn't meet my needs, but I suppose it's good to fall back on it.  I've also fixed a problem in the meta refresh line - it was missing the "url=" part of the content attribute.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">server_url</span><span class="keyword">()<br />{   <br />    </span><span class="default">$proto </span><span class="keyword">= </span><span class="string">"http" </span><span class="keyword">.<br />        ((isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTPS'</span><span class="keyword">]) &amp;&amp; </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTPS'</span><span class="keyword">] == </span><span class="string">"on"</span><span class="keyword">) ? </span><span class="string">"s" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">) . </span><span class="string">"://"</span><span class="keyword">;<br />    </span><span class="default">$server </span><span class="keyword">= isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">]) ?<br />        </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">] : </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_NAME'</span><span class="keyword">];<br />    return </span><span class="default">$proto </span><span class="keyword">. </span><span class="default">$server</span><span class="keyword">;<br />}<br />    <br />function </span><span class="default">redirect_rel</span><span class="keyword">(</span><span class="default">$relative_url</span><span class="keyword">)<br />{<br />    </span><span class="default">$url </span><span class="keyword">= </span><span class="default">server_url</span><span class="keyword">() . </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">]) . </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$relative_url</span><span class="keyword">;<br />    if (!</span><span class="default">headers_sent</span><span class="keyword">())<br />    {<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: </span><span class="default">$url</span><span class="string">"</span><span class="keyword">);<br />    }<br />    else<br />    {<br />        echo </span><span class="string">"&lt;meta http-equiv=\"refresh\" content=\"0;url=</span><span class="default">$url</span><span class="string">\"&gt;\r\n"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59242">  <div class="votes">
    <div id="Vu59242">
    <a href="/manual/vote-note.php?id=59242&amp;page=function.headers-sent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59242">
    <a href="/manual/vote-note.php?id=59242&amp;page=function.headers-sent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59242" title="60% like this...">
    2
    </div>
  </div>
  <a href="#59242" class="name">
  <strong class="user"><em>trevize (shtrudel) gmail.com</em></strong></a><a class="genanchor" href="#59242"> &para;</a><div class="date" title="2005-11-30 06:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59242">
<div class="phpcode"><code><span class="html">Note that in IIS (or at least the version that comes with W2K server), the server seems to do some buffering, so even if you output someting or cause a warning, the value of headers_sent() may be false because the headers haven't been sent yet.<br /><br />So it's not a safe way to know if warnings have been encountered in your script.</span></code></div>
  </div>
 </div>
  <div class="note" id="75835">  <div class="votes">
    <div id="Vu75835">
    <a href="/manual/vote-note.php?id=75835&amp;page=function.headers-sent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75835">
    <a href="/manual/vote-note.php?id=75835&amp;page=function.headers-sent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75835" title="53% like this...">
    1
    </div>
  </div>
  <a href="#75835" class="name">
  <strong class="user"><em>collectours at free dot fr</em></strong></a><a class="genanchor" href="#75835"> &para;</a><div class="date" title="2007-06-18 02:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75835">
<div class="phpcode"><code><span class="html">In response to K.Tomono and alexrussell101 at gmail dot com :<br /><br />Yes,<br />headers_sent() will return false, even if you sent something to the ouptut using print() or header() , if output_buffering is different from Off in you php.ini, and the length of what you sent does not exceed the size of output_buffering.<br /><br />To test it, try this code with  these values in php.ini<br />1) output_buffering=32<br />2) output buffering = 4096<br /><br />[code]<br /><span class="default">&lt;?php<br />    </span><span class="keyword">echo </span><span class="string">"Yo&lt;br /&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"Sent:"</span><span class="keyword">,</span><span class="default">headers_sent</span><span class="keyword">(),</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"enough text to feed the buffer until it overflows ;-)&lt;br /&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"Sent:"</span><span class="keyword">,</span><span class="default">headers_sent</span><span class="keyword">(),</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>[/code]<br /><br />then put <br />3) output buffering = Off<br />and try this code<br />[code]<br /><span class="default">&lt;?php<br />    </span><span class="keyword">echo </span><span class="string">"Yo&lt;br /&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"Sent:"</span><span class="keyword">,</span><span class="default">headers_sent</span><span class="keyword">(),</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>[/code]<br />which will this time unconditionnally say that headers were sent.<br /><br />This is noticed in php.ini comment :<br />"Output buffering allows you to send header lines (including cookies) even after you send body content, in the price of slowing PHP's output layer a bit."<br /><br />Note : This is completly independant of implicit_flush tuning.</span></code></div>
  </div>
 </div>
  <div class="note" id="122797">  <div class="votes">
    <div id="Vu122797">
    <a href="/manual/vote-note.php?id=122797&amp;page=function.headers-sent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122797">
    <a href="/manual/vote-note.php?id=122797&amp;page=function.headers-sent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122797" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122797" class="name">
  <strong class="user"><em>rojasredes at gmail dot com</em></strong></a><a class="genanchor" href="#122797"> &para;</a><div class="date" title="2018-06-04 01:59"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122797">
<div class="phpcode"><code><span class="html">Remember to save source code file *.php with UTF-8 without BOM.<br />If saved with UTF-8 BOM the next code allways return "true":<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if </span><span class="default">headers_sent</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$numline</span><span class="keyword">)<br />{   <br />    die(</span><span class="string">"true"</span><span class="keyword">);<br />}<br />else<br />{<br />    die(</span><span class="string">"false"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Even when $numline is 1, and there is any character before <span class="default">&lt;?php<br /></span><span class="keyword">and </span><span class="default">after ?&gt;<br /></span><br />Save file without BOM and everything will be ok, then.</span></code></div>
  </div>
 </div>
  <div class="note" id="90160">  <div class="votes">
    <div id="Vu90160">
    <a href="/manual/vote-note.php?id=90160&amp;page=function.headers-sent&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90160">
    <a href="/manual/vote-note.php?id=90160&amp;page=function.headers-sent&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90160" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90160" class="name">
  <strong class="user"><em>Jase</em></strong></a><a class="genanchor" href="#90160"> &para;</a><div class="date" title="2009-04-08 06:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90160">
<div class="phpcode"><code><span class="html">This is becoming annoying the amount of posts to try and describe the behaviour of headers<br /><br />Headers appear first in the data sent to the user's browser<br /><br />if headers have been called using the header() function but no data has been sent to the output buffer (using echo, readfile etc), then the headers are sent at the end of script execution otherwise they are sent when the buffer reaches it's limit and emptied<br /><br />simple<br /><br />this means that headers_sent() will return false if nothing is sent to the output buffer because the headers are being sent at the end of the script<br /><br />This is not a bug either, this is expected behaviour. Keeping headers until forced to send them out is a good idea because certain measures can be taken like prevention of meta injection etc (option in header() to replace headers that have not yet been sent)<br /><br />besides, headers_sent() is good for when you try and send headers but the output buffer has already been emptied (in cases of php error handling for example). Obviously if the buffer has emtpied, sending headers won't work.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.headers-sent&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.headers-sent.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.network.php">Network Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.checkdnsrr.php" title="checkdnsrr">checkdnsrr</a>
                        </li>
                                                <li class="">
                            <a href="function.closelog.php" title="closelog">closelog</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-check-record.php" title="dns_&#8203;check_&#8203;record">dns_&#8203;check_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-mx.php" title="dns_&#8203;get_&#8203;mx">dns_&#8203;get_&#8203;mx</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-record.php" title="dns_&#8203;get_&#8203;record">dns_&#8203;get_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.fsockopen.php" title="fsockopen">fsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyaddr.php" title="gethostbyaddr">gethostbyaddr</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyname.php" title="gethostbyname">gethostbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbynamel.php" title="gethostbynamel">gethostbynamel</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostname.php" title="gethostname">gethostname</a>
                        </li>
                                                <li class="">
                            <a href="function.getmxrr.php" title="getmxrr">getmxrr</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobyname.php" title="getprotobyname">getprotobyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobynumber.php" title="getprotobynumber">getprotobynumber</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyname.php" title="getservbyname">getservbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyport.php" title="getservbyport">getservbyport</a>
                        </li>
                                                <li class="">
                            <a href="function.header.php" title="header">header</a>
                        </li>
                                                <li class="">
                            <a href="function.header-register-callback.php" title="header_&#8203;register_&#8203;callback">header_&#8203;register_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.header-remove.php" title="header_&#8203;remove">header_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-list.php" title="headers_&#8203;list">headers_&#8203;list</a>
                        </li>
                                                <li class="current">
                            <a href="function.headers-sent.php" title="headers_&#8203;sent">headers_&#8203;sent</a>
                        </li>
                                                <li class="">
                            <a href="function.http-clear-last-response-headers.php" title="http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-get-last-response-headers.php" title="http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-response-code.php" title="http_&#8203;response_&#8203;code">http_&#8203;response_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-ntop.php" title="inet_&#8203;ntop">inet_&#8203;ntop</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-pton.php" title="inet_&#8203;pton">inet_&#8203;pton</a>
                        </li>
                                                <li class="">
                            <a href="function.ip2long.php" title="ip2long">ip2long</a>
                        </li>
                                                <li class="">
                            <a href="function.long2ip.php" title="long2ip">long2ip</a>
                        </li>
                                                <li class="">
                            <a href="function.net-get-interfaces.php" title="net_&#8203;get_&#8203;interfaces">net_&#8203;get_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.openlog.php" title="openlog">openlog</a>
                        </li>
                                                <li class="">
                            <a href="function.pfsockopen.php" title="pfsockopen">pfsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.request-parse-body.php" title="request_&#8203;parse_&#8203;body">request_&#8203;parse_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.setcookie.php" title="setcookie">setcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.setrawcookie.php" title="setrawcookie">setrawcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-status.php" title="socket_&#8203;get_&#8203;status">socket_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-blocking.php" title="socket_&#8203;set_&#8203;blocking">socket_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-timeout.php" title="socket_&#8203;set_&#8203;timeout">socket_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.syslog.php" title="syslog">syslog</a>
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
