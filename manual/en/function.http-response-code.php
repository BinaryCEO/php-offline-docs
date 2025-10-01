<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: http_response_code - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.http-response-code.php">
 <link rel="shorturl" href="https://www.php.net/http-response-code">
 <link rel="alternate" href="https://www.php.net/http-response-code" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.http-get-last-response-headers.php">
 <link rel="next" href="https://www.php.net/manual/en/function.inet-ntop.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.http-response-code.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.http-response-code.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.http-response-code.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.http-response-code.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.http-response-code.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.http-response-code.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.http-response-code.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.http-response-code.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.http-response-code.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.http-response-code.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.http-response-code.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get or Set the HTTP response code" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: http_response_code - Manual" />
<meta name="twitter:description" content="Get or Set the HTTP response code" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: http_response_code - Manual" />
<meta itemprop="description" content="Get or Set the HTTP response code" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get or Set the HTTP response code" />

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
        <a href="function.inet-ntop.php">
          inet_ntop &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.http-get-last-response-headers.php">
          &laquo; http_get_last_response_headers        </a>
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
            <option value='en/function.http-response-code.php' selected="selected">English</option>
            <option value='de/function.http-response-code.php'>German</option>
            <option value='es/function.http-response-code.php'>Spanish</option>
            <option value='fr/function.http-response-code.php'>French</option>
            <option value='it/function.http-response-code.php'>Italian</option>
            <option value='ja/function.http-response-code.php'>Japanese</option>
            <option value='pt_BR/function.http-response-code.php'>Brazilian Portuguese</option>
            <option value='ru/function.http-response-code.php'>Russian</option>
            <option value='tr/function.http-response-code.php'>Turkish</option>
            <option value='uk/function.http-response-code.php'>Ukrainian</option>
            <option value='zh/function.http-response-code.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.http-response-code" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">http_response_code</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">http_response_code</span> &mdash; <span class="dc-title">Get or Set the HTTP response code</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.http-response-code-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>http_response_code</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$response_code</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
    Gets or sets the HTTP response status code.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.http-response-code-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">response_code</code></dt>
     <dd>
      <p class="para">
       The optional <code class="parameter">response_code</code> will set the response code.
      </p>
     </dd>
       
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.http-response-code-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If <code class="parameter">response_code</code> is provided, then the previous
   status code will be returned. If <code class="parameter">response_code</code> is not
   provided, then the current status code will be returned. Both of these
   values will default to a <code class="literal">200</code> status code if used in a web
   server environment.
  </p>
  <p class="para">
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> will be returned if <code class="parameter">response_code</code> is not
   provided and it is not invoked in a web server environment (such as from a
   CLI application). <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> will be returned if
   <code class="parameter">response_code</code> is provided and it is not invoked in a
   web server environment (but only when no previous response status has been
   set).
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.http-response-code-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4734">
    <p><strong>Example #1 Using <span class="function"><strong>http_response_code()</strong></span> in a web server environment</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Get the current response code and set a new one<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">http_response_code</span><span style="color: #007700">(</span><span style="color: #0000BB">404</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Get the new response code<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">http_response_code</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">int(200)
int(404)</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-4735">
    <p><strong>Example #2 Using <span class="function"><strong>http_response_code()</strong></span> in a CLI environment</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Get the current default response code<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">http_response_code</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// Set a response code<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">http_response_code</span><span style="color: #007700">(</span><span style="color: #0000BB">201</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Get the new response code<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">http_response_code</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(false)
bool(true)
int(201)</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.http-response-code-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.header.php" class="function" rel="rdfs-seeAlso">header()</a> - Send a raw HTTP header</span></li>
    <li><span class="function"><a href="function.headers-list.php" class="function" rel="rdfs-seeAlso">headers_list()</a> - Returns a list of response headers sent (or ready to send)</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/http-response-code.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.http-response-code%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.http-response-code&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.http-response-code.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107261">  <div class="votes">
    <div id="Vu107261">
    <a href="/manual/vote-note.php?id=107261&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107261">
    <a href="/manual/vote-note.php?id=107261&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107261" title="72% like this...">
    197
    </div>
  </div>
  <a href="#107261" class="name">
  <strong class="user"><em>craig at craigfrancis dot co dot uk</em></strong></a><a class="genanchor" href="#107261"> &para;</a><div class="date" title="2012-01-25 04:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107261">
<div class="phpcode"><code><span class="html">If your version of PHP does not include this function:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'http_response_code'</span><span class="keyword">)) {<br />        function </span><span class="default">http_response_code</span><span class="keyword">(</span><span class="default">$code </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">) {<br /><br />            if (</span><span class="default">$code </span><span class="keyword">!== </span><span class="default">NULL</span><span class="keyword">) {<br /><br />                switch (</span><span class="default">$code</span><span class="keyword">) {<br />                    case </span><span class="default">100</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Continue'</span><span class="keyword">; break;<br />                    case </span><span class="default">101</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Switching Protocols'</span><span class="keyword">; break;<br />                    case </span><span class="default">200</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'OK'</span><span class="keyword">; break;<br />                    case </span><span class="default">201</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Created'</span><span class="keyword">; break;<br />                    case </span><span class="default">202</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Accepted'</span><span class="keyword">; break;<br />                    case </span><span class="default">203</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Non-Authoritative Information'</span><span class="keyword">; break;<br />                    case </span><span class="default">204</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'No Content'</span><span class="keyword">; break;<br />                    case </span><span class="default">205</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Reset Content'</span><span class="keyword">; break;<br />                    case </span><span class="default">206</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Partial Content'</span><span class="keyword">; break;<br />                    case </span><span class="default">300</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Multiple Choices'</span><span class="keyword">; break;<br />                    case </span><span class="default">301</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Moved Permanently'</span><span class="keyword">; break;<br />                    case </span><span class="default">302</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Moved Temporarily'</span><span class="keyword">; break;<br />                    case </span><span class="default">303</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'See Other'</span><span class="keyword">; break;<br />                    case </span><span class="default">304</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Not Modified'</span><span class="keyword">; break;<br />                    case </span><span class="default">305</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Use Proxy'</span><span class="keyword">; break;<br />                    case </span><span class="default">400</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Bad Request'</span><span class="keyword">; break;<br />                    case </span><span class="default">401</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Unauthorized'</span><span class="keyword">; break;<br />                    case </span><span class="default">402</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Payment Required'</span><span class="keyword">; break;<br />                    case </span><span class="default">403</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Forbidden'</span><span class="keyword">; break;<br />                    case </span><span class="default">404</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Not Found'</span><span class="keyword">; break;<br />                    case </span><span class="default">405</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Method Not Allowed'</span><span class="keyword">; break;<br />                    case </span><span class="default">406</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Not Acceptable'</span><span class="keyword">; break;<br />                    case </span><span class="default">407</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Proxy Authentication Required'</span><span class="keyword">; break;<br />                    case </span><span class="default">408</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Request Time-out'</span><span class="keyword">; break;<br />                    case </span><span class="default">409</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Conflict'</span><span class="keyword">; break;<br />                    case </span><span class="default">410</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Gone'</span><span class="keyword">; break;<br />                    case </span><span class="default">411</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Length Required'</span><span class="keyword">; break;<br />                    case </span><span class="default">412</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Precondition Failed'</span><span class="keyword">; break;<br />                    case </span><span class="default">413</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Request Entity Too Large'</span><span class="keyword">; break;<br />                    case </span><span class="default">414</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Request-URI Too Large'</span><span class="keyword">; break;<br />                    case </span><span class="default">415</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Unsupported Media Type'</span><span class="keyword">; break;<br />                    case </span><span class="default">500</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Internal Server Error'</span><span class="keyword">; break;<br />                    case </span><span class="default">501</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Not Implemented'</span><span class="keyword">; break;<br />                    case </span><span class="default">502</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Bad Gateway'</span><span class="keyword">; break;<br />                    case </span><span class="default">503</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Service Unavailable'</span><span class="keyword">; break;<br />                    case </span><span class="default">504</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Gateway Time-out'</span><span class="keyword">; break;<br />                    case </span><span class="default">505</span><span class="keyword">: </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'HTTP Version not supported'</span><span class="keyword">; break;<br />                    default:<br />                        exit(</span><span class="string">'Unknown http status code "' </span><span class="keyword">. </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">) . </span><span class="string">'"'</span><span class="keyword">);<br />                    break;<br />                }<br /><br />                </span><span class="default">$protocol </span><span class="keyword">= (isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_PROTOCOL'</span><span class="keyword">]) ? </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_PROTOCOL'</span><span class="keyword">] : </span><span class="string">'HTTP/1.0'</span><span class="keyword">);<br /><br />                </span><span class="default">header</span><span class="keyword">(</span><span class="default">$protocol </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$code </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$text</span><span class="keyword">);<br /><br />                </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'http_response_code'</span><span class="keyword">] = </span><span class="default">$code</span><span class="keyword">;<br /><br />            } else {<br /><br />                </span><span class="default">$code </span><span class="keyword">= (isset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'http_response_code'</span><span class="keyword">]) ? </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'http_response_code'</span><span class="keyword">] : </span><span class="default">200</span><span class="keyword">);<br /><br />            }<br /><br />            return </span><span class="default">$code</span><span class="keyword">;<br /><br />        }<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />In this example I am using $GLOBALS, but you can use whatever storage mechanism you like... I don't think there is a way to return the current status code:<br /><br /><a href="https://bugs.php.net/bug.php?id=52555" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=52555</a><br /><br />For reference the error codes I got from PHP's source code:<br /><br /><a href="http://lxr.php.net/opengrok/xref/PHP_5_4/sapi/cgi/cgi_main.c#354" rel="nofollow" target="_blank">http://lxr.php.net/opengrok/xref/PHP_5_4/sapi/cgi/cgi_main.c#354</a><br /><br />And how the current http header is sent, with the variables it uses:<br /><br /><a href="http://lxr.php.net/opengrok/xref/PHP_5_4/main/SAPI.c#856" rel="nofollow" target="_blank">http://lxr.php.net/opengrok/xref/PHP_5_4/main/SAPI.c#856</a></span></code></div>
  </div>
 </div>
  <div class="note" id="114996">  <div class="votes">
    <div id="Vu114996">
    <a href="/manual/vote-note.php?id=114996&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114996">
    <a href="/manual/vote-note.php?id=114996&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114996" title="82% like this...">
    66
    </div>
  </div>
  <a href="#114996" class="name">
  <strong class="user"><em>Stefan W</em></strong></a><a class="genanchor" href="#114996"> &para;</a><div class="date" title="2014-05-10 02:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114996">
<div class="phpcode"><code><span class="html">Note that you can NOT set arbitrary response codes with this function, only those that are known to PHP (or the SAPI PHP is running on). <br /><br />The following codes currently work as expected (with PHP running as Apache module):<br />200 – 208, 226<br />300 – 305, 307, 308<br />400 – 417, 422 – 424, 426, 428 – 429, 431<br />500 – 508, 510 – 511<br /><br />Codes 0, 100, 101, and 102 will be sent as "200 OK".<br /><br />Everything else will result in "500 Internal Server Error".<br /><br />If you want to send responses with a freestyle status line, you need to use the `header()` function:<br /><br /><span class="default">&lt;?php header</span><span class="keyword">(</span><span class="string">"HTTP/1.0 418 I'm A Teapot"</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113062">  <div class="votes">
    <div id="Vu113062">
    <a href="/manual/vote-note.php?id=113062&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113062">
    <a href="/manual/vote-note.php?id=113062&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113062" title="68% like this...">
    25
    </div>
  </div>
  <a href="#113062" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#113062"> &para;</a><div class="date" title="2013-08-24 01:44"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113062">
<div class="phpcode"><code><span class="html">Status codes as an array:<br /><br /><span class="default">&lt;?php<br />$http_status_codes </span><span class="keyword">= array(</span><span class="default">100 </span><span class="keyword">=&gt; </span><span class="string">"Continue"</span><span class="keyword">, </span><span class="default">101 </span><span class="keyword">=&gt; </span><span class="string">"Switching Protocols"</span><span class="keyword">, </span><span class="default">102 </span><span class="keyword">=&gt; </span><span class="string">"Processing"</span><span class="keyword">, </span><span class="default">200 </span><span class="keyword">=&gt; </span><span class="string">"OK"</span><span class="keyword">, </span><span class="default">201 </span><span class="keyword">=&gt; </span><span class="string">"Created"</span><span class="keyword">, </span><span class="default">202 </span><span class="keyword">=&gt; </span><span class="string">"Accepted"</span><span class="keyword">, </span><span class="default">203 </span><span class="keyword">=&gt; </span><span class="string">"Non-Authoritative Information"</span><span class="keyword">, </span><span class="default">204 </span><span class="keyword">=&gt; </span><span class="string">"No Content"</span><span class="keyword">, </span><span class="default">205 </span><span class="keyword">=&gt; </span><span class="string">"Reset Content"</span><span class="keyword">, </span><span class="default">206 </span><span class="keyword">=&gt; </span><span class="string">"Partial Content"</span><span class="keyword">, </span><span class="default">207 </span><span class="keyword">=&gt; </span><span class="string">"Multi-Status"</span><span class="keyword">, </span><span class="default">300 </span><span class="keyword">=&gt; </span><span class="string">"Multiple Choices"</span><span class="keyword">, </span><span class="default">301 </span><span class="keyword">=&gt; </span><span class="string">"Moved Permanently"</span><span class="keyword">, </span><span class="default">302 </span><span class="keyword">=&gt; </span><span class="string">"Found"</span><span class="keyword">, </span><span class="default">303 </span><span class="keyword">=&gt; </span><span class="string">"See Other"</span><span class="keyword">, </span><span class="default">304 </span><span class="keyword">=&gt; </span><span class="string">"Not Modified"</span><span class="keyword">, </span><span class="default">305 </span><span class="keyword">=&gt; </span><span class="string">"Use Proxy"</span><span class="keyword">, </span><span class="default">306 </span><span class="keyword">=&gt; </span><span class="string">"(Unused)"</span><span class="keyword">, </span><span class="default">307 </span><span class="keyword">=&gt; </span><span class="string">"Temporary Redirect"</span><span class="keyword">, </span><span class="default">308 </span><span class="keyword">=&gt; </span><span class="string">"Permanent Redirect"</span><span class="keyword">, </span><span class="default">400 </span><span class="keyword">=&gt; </span><span class="string">"Bad Request"</span><span class="keyword">, </span><span class="default">401 </span><span class="keyword">=&gt; </span><span class="string">"Unauthorized"</span><span class="keyword">, </span><span class="default">402 </span><span class="keyword">=&gt; </span><span class="string">"Payment Required"</span><span class="keyword">, </span><span class="default">403 </span><span class="keyword">=&gt; </span><span class="string">"Forbidden"</span><span class="keyword">, </span><span class="default">404 </span><span class="keyword">=&gt; </span><span class="string">"Not Found"</span><span class="keyword">, </span><span class="default">405 </span><span class="keyword">=&gt; </span><span class="string">"Method Not Allowed"</span><span class="keyword">, </span><span class="default">406 </span><span class="keyword">=&gt; </span><span class="string">"Not Acceptable"</span><span class="keyword">, </span><span class="default">407 </span><span class="keyword">=&gt; </span><span class="string">"Proxy Authentication Required"</span><span class="keyword">, </span><span class="default">408 </span><span class="keyword">=&gt; </span><span class="string">"Request Timeout"</span><span class="keyword">, </span><span class="default">409 </span><span class="keyword">=&gt; </span><span class="string">"Conflict"</span><span class="keyword">, </span><span class="default">410 </span><span class="keyword">=&gt; </span><span class="string">"Gone"</span><span class="keyword">, </span><span class="default">411 </span><span class="keyword">=&gt; </span><span class="string">"Length Required"</span><span class="keyword">, </span><span class="default">412 </span><span class="keyword">=&gt; </span><span class="string">"Precondition Failed"</span><span class="keyword">, </span><span class="default">413 </span><span class="keyword">=&gt; </span><span class="string">"Request Entity Too Large"</span><span class="keyword">, </span><span class="default">414 </span><span class="keyword">=&gt; </span><span class="string">"Request-URI Too Long"</span><span class="keyword">, </span><span class="default">415 </span><span class="keyword">=&gt; </span><span class="string">"Unsupported Media Type"</span><span class="keyword">, </span><span class="default">416 </span><span class="keyword">=&gt; </span><span class="string">"Requested Range Not Satisfiable"</span><span class="keyword">, </span><span class="default">417 </span><span class="keyword">=&gt; </span><span class="string">"Expectation Failed"</span><span class="keyword">, </span><span class="default">418 </span><span class="keyword">=&gt; </span><span class="string">"I'm a teapot"</span><span class="keyword">, </span><span class="default">419 </span><span class="keyword">=&gt; </span><span class="string">"Authentication Timeout"</span><span class="keyword">, </span><span class="default">420 </span><span class="keyword">=&gt; </span><span class="string">"Enhance Your Calm"</span><span class="keyword">, </span><span class="default">422 </span><span class="keyword">=&gt; </span><span class="string">"Unprocessable Entity"</span><span class="keyword">, </span><span class="default">423 </span><span class="keyword">=&gt; </span><span class="string">"Locked"</span><span class="keyword">, </span><span class="default">424 </span><span class="keyword">=&gt; </span><span class="string">"Failed Dependency"</span><span class="keyword">, </span><span class="default">424 </span><span class="keyword">=&gt; </span><span class="string">"Method Failure"</span><span class="keyword">, </span><span class="default">425 </span><span class="keyword">=&gt; </span><span class="string">"Unordered Collection"</span><span class="keyword">, </span><span class="default">426 </span><span class="keyword">=&gt; </span><span class="string">"Upgrade Required"</span><span class="keyword">, </span><span class="default">428 </span><span class="keyword">=&gt; </span><span class="string">"Precondition Required"</span><span class="keyword">, </span><span class="default">429 </span><span class="keyword">=&gt; </span><span class="string">"Too Many Requests"</span><span class="keyword">, </span><span class="default">431 </span><span class="keyword">=&gt; </span><span class="string">"Request Header Fields Too Large"</span><span class="keyword">, </span><span class="default">444 </span><span class="keyword">=&gt; </span><span class="string">"No Response"</span><span class="keyword">, </span><span class="default">449 </span><span class="keyword">=&gt; </span><span class="string">"Retry With"</span><span class="keyword">, </span><span class="default">450 </span><span class="keyword">=&gt; </span><span class="string">"Blocked by Windows Parental Controls"</span><span class="keyword">, </span><span class="default">451 </span><span class="keyword">=&gt; </span><span class="string">"Unavailable For Legal Reasons"</span><span class="keyword">, </span><span class="default">494 </span><span class="keyword">=&gt; </span><span class="string">"Request Header Too Large"</span><span class="keyword">, </span><span class="default">495 </span><span class="keyword">=&gt; </span><span class="string">"Cert Error"</span><span class="keyword">, </span><span class="default">496 </span><span class="keyword">=&gt; </span><span class="string">"No Cert"</span><span class="keyword">, </span><span class="default">497 </span><span class="keyword">=&gt; </span><span class="string">"HTTP to HTTPS"</span><span class="keyword">, </span><span class="default">499 </span><span class="keyword">=&gt; </span><span class="string">"Client Closed Request"</span><span class="keyword">, </span><span class="default">500 </span><span class="keyword">=&gt; </span><span class="string">"Internal Server Error"</span><span class="keyword">, </span><span class="default">501 </span><span class="keyword">=&gt; </span><span class="string">"Not Implemented"</span><span class="keyword">, </span><span class="default">502 </span><span class="keyword">=&gt; </span><span class="string">"Bad Gateway"</span><span class="keyword">, </span><span class="default">503 </span><span class="keyword">=&gt; </span><span class="string">"Service Unavailable"</span><span class="keyword">, </span><span class="default">504 </span><span class="keyword">=&gt; </span><span class="string">"Gateway Timeout"</span><span class="keyword">, </span><span class="default">505 </span><span class="keyword">=&gt; </span><span class="string">"HTTP Version Not Supported"</span><span class="keyword">, </span><span class="default">506 </span><span class="keyword">=&gt; </span><span class="string">"Variant Also Negotiates"</span><span class="keyword">, </span><span class="default">507 </span><span class="keyword">=&gt; </span><span class="string">"Insufficient Storage"</span><span class="keyword">, </span><span class="default">508 </span><span class="keyword">=&gt; </span><span class="string">"Loop Detected"</span><span class="keyword">, </span><span class="default">509 </span><span class="keyword">=&gt; </span><span class="string">"Bandwidth Limit Exceeded"</span><span class="keyword">, </span><span class="default">510 </span><span class="keyword">=&gt; </span><span class="string">"Not Extended"</span><span class="keyword">, </span><span class="default">511 </span><span class="keyword">=&gt; </span><span class="string">"Network Authentication Required"</span><span class="keyword">, </span><span class="default">598 </span><span class="keyword">=&gt; </span><span class="string">"Network read timeout error"</span><span class="keyword">, </span><span class="default">599 </span><span class="keyword">=&gt; </span><span class="string">"Network connect timeout error"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Source: Wikipedia "List_of_HTTP_status_codes"</span></code></div>
  </div>
 </div>
  <div class="note" id="124894">  <div class="votes">
    <div id="Vu124894">
    <a href="/manual/vote-note.php?id=124894&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124894">
    <a href="/manual/vote-note.php?id=124894&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124894" title="70% like this...">
    8
    </div>
  </div>
  <a href="#124894" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#124894"> &para;</a><div class="date" title="2020-04-09 08:33"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124894">
<div class="phpcode"><code><span class="html">if you need a response code not supported by http_response_code(), such as WebDAV / RFC4918's "HTTP 507 Insufficient Storage", try:<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_PROTOCOL'</span><span class="keyword">] . </span><span class="string">' 507 Insufficient Storage'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>result: something like<br /><br />HTTP/1.1 507 Insufficient Storage</span></code></div>
  </div>
 </div>
  <div class="note" id="118253">  <div class="votes">
    <div id="Vu118253">
    <a href="/manual/vote-note.php?id=118253&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118253">
    <a href="/manual/vote-note.php?id=118253&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118253" title="69% like this...">
    14
    </div>
  </div>
  <a href="#118253" class="name">
  <strong class="user"><em>Thomas A. P.</em></strong></a><a class="genanchor" href="#118253"> &para;</a><div class="date" title="2015-11-03 12:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118253">
<div class="phpcode"><code><span class="html">When setting the response code to non-standard ones like 420, Apache outputs 500 Internal Server Error.<br /><br />This happens when using header(0,0,420) and http_response_code(420).<br />Use header('HTTP/1.1 420 Enhance Your Calm') instead.<br /><br />Note that the response code in the string IS interpreted and used in the access log and output via http_response_code().</span></code></div>
  </div>
 </div>
  <div class="note" id="125538">  <div class="votes">
    <div id="Vu125538">
    <a href="/manual/vote-note.php?id=125538&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125538">
    <a href="/manual/vote-note.php?id=125538&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125538" title="62% like this...">
    4
    </div>
  </div>
  <a href="#125538" class="name">
  <strong class="user"><em>viaujoc at videotron dot ca</em></strong></a><a class="genanchor" href="#125538"> &para;</a><div class="date" title="2020-11-24 12:53"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125538">
<div class="phpcode"><code><span class="html">Do not mix the use of http_response_code() and manually setting  the response code header because the actual HTTP status code being returned by the web server may not end up as expected. http_response_code() does not work if the response code has previously been set using the header() function. Example:<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'HTTP/1.1 401 Unauthorized'</span><span class="keyword">);<br /></span><span class="default">http_response_code</span><span class="keyword">(</span><span class="default">403</span><span class="keyword">);<br />print(</span><span class="default">http_response_code</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />The raw HTTP response will be (notice the actual status code on the first line does not match the printed http_response_code in the body):<br /><br />HTTP/1.1 401 Unauthorized<br />Date: Tue, 24 Nov 2020 13:49:08 GMT<br />Server: Apache<br />Connection: Upgrade, Keep-Alive<br />Keep-Alive: timeout=5, max=100<br />Transfer-Encoding: chunked<br />Content-Type: text/html; charset=UTF-8<br /><br />403<br /><br />I only tested it on Apache. I am not sure if this behavior is specific to Apache or common to all PHP distributions.</span></code></div>
  </div>
 </div>
  <div class="note" id="112142">  <div class="votes">
    <div id="Vu112142">
    <a href="/manual/vote-note.php?id=112142&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112142">
    <a href="/manual/vote-note.php?id=112142&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112142" title="63% like this...">
    11
    </div>
  </div>
  <a href="#112142" class="name">
  <strong class="user"><em>Rob Zazueta</em></strong></a><a class="genanchor" href="#112142"> &para;</a><div class="date" title="2013-05-09 04:43"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112142">
<div class="phpcode"><code><span class="html">The note above from "Anonymous" is wrong. I'm running this behind the AWS Elastic Loadbalancer and trying the header(':'.$error_code...) method mentioned above is treated as invalid HTTP.<br /><br />The documentation for the header() function has the right way to implement this if you're still on &lt; php 5.4:<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"HTTP/1.0 404 Not Found"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109435">  <div class="votes">
    <div id="Vu109435">
    <a href="/manual/vote-note.php?id=109435&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109435">
    <a href="/manual/vote-note.php?id=109435&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109435" title="61% like this...">
    15
    </div>
  </div>
  <a href="#109435" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#109435"> &para;</a><div class="date" title="2012-07-17 11:35"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109435">
<div class="phpcode"><code><span class="html">If you don't have PHP 5.4 and want to change the returned status code, you can simply write:<br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">$statusCode</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The ':' are mandatory, or it won't work</span></code></div>
  </div>
 </div>
  <div class="note" id="112423">  <div class="votes">
    <div id="Vu112423">
    <a href="/manual/vote-note.php?id=112423&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112423">
    <a href="/manual/vote-note.php?id=112423&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112423" title="61% like this...">
    7
    </div>
  </div>
  <a href="#112423" class="name">
  <strong class="user"><em>Richard F.</em></strong></a><a class="genanchor" href="#112423"> &para;</a><div class="date" title="2013-06-15 10:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112423">
<div class="phpcode"><code><span class="html">At least on my side with php-fpm and nginx this method does not change the text in the response, only the code.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// HTTP/1.1 404 Not Found<br /></span><span class="default">http_response_code</span><span class="keyword">(</span><span class="default">404</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The resulting response is HTTP/1.1 404 OK</span></code></div>
  </div>
 </div>
  <div class="note" id="114517">  <div class="votes">
    <div id="Vu114517">
    <a href="/manual/vote-note.php?id=114517&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114517">
    <a href="/manual/vote-note.php?id=114517&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114517" title="59% like this...">
    8
    </div>
  </div>
  <a href="#114517" class="name">
  <strong class="user"><em>stephen at bobs-bits dot com</em></strong></a><a class="genanchor" href="#114517"> &para;</a><div class="date" title="2014-03-03 07:44"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114517">
<div class="phpcode"><code><span class="html">It's not mentioned explicitly, but the return value when SETTING, is the OLD status code.<br />e.g.<br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= </span><span class="default">http_response_code</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">http_response_code</span><span class="keyword">(</span><span class="default">202</span><span class="keyword">);<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">http_response_code</span><span class="keyword">();<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br /><br /></span><span class="comment">// Result:<br />// int(200)<br />// int(200)<br />// int(202)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116880">  <div class="votes">
    <div id="Vu116880">
    <a href="/manual/vote-note.php?id=116880&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116880">
    <a href="/manual/vote-note.php?id=116880&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116880" title="55% like this...">
    4
    </div>
  </div>
  <a href="#116880" class="name">
  <strong class="user"><em>Steven</em></strong></a><a class="genanchor" href="#116880"> &para;</a><div class="date" title="2015-03-15 01:12"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116880">
<div class="phpcode"><code><span class="html">http_response_code is basically a shorthand way of writing a http status header, with the added bonus that PHP will work out a suitable Reason Phrase to provide by matching your response code to one of the values in an enumeration it maintains within php-src/main/http_status_codes.h. Note that this means your response code must match a response code that PHP knows about. You can't create your own response codes using this method, however you can using the header method.<br /><br />In summary - The differences between "http_response_code" and "header" for setting response codes:<br /><br />1. Using http_response_code will cause PHP to match and apply a Reason Phrase from a list of Reason Phrases that are hard-coded into the PHP source code.<br /><br />2. Because of point 1 above, if you use http_response_code you must set a code that PHP knows about. You can't set your own custom code, however you can set a custom code (and Reason Phrase) if you use the header method.</span></code></div>
  </div>
 </div>
  <div class="note" id="116539">  <div class="votes">
    <div id="Vu116539">
    <a href="/manual/vote-note.php?id=116539&amp;page=function.http-response-code&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116539">
    <a href="/manual/vote-note.php?id=116539&amp;page=function.http-response-code&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116539" title="52% like this...">
    1
    </div>
  </div>
  <a href="#116539" class="name">
  <strong class="user"><em>yefremov {dot} sasha () gmail {dot} com</em></strong></a><a class="genanchor" href="#116539"> &para;</a><div class="date" title="2015-01-20 04:59"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116539">
<div class="phpcode"><code><span class="html">@craig at craigfrancis dot co dot uk@ wrote the function that replaces the original. It is very usefull, but has a bug. The original http_response_code always returns the previous or current code, not the code you are setting now. Here is my fixed version. I also use $GLOBALS to store the current code, but trigger_error() instead of exit. So now, how the function will behave in the case of error lies on the error handler. Or you can change it back to exit().<br /><br />if (!function_exists('http_response_code')) {<br />    function http_response_code($code = NULL) {     <br />        $prev_code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);<br /><br />        if ($code === NULL) {<br />            return $prev_code;<br />        }<br /><br />        switch ($code) {<br />            case 100: $text = 'Continue'; break;<br />            case 101: $text = 'Switching Protocols'; break;<br />            case 200: $text = 'OK'; break;<br />            case 201: $text = 'Created'; break;<br />            case 202: $text = 'Accepted'; break;<br />            case 203: $text = 'Non-Authoritative Information'; break;<br />            case 204: $text = 'No Content'; break;<br />            case 205: $text = 'Reset Content'; break;<br />            case 206: $text = 'Partial Content'; break;<br />            case 300: $text = 'Multiple Choices'; break;<br />            case 301: $text = 'Moved Permanently'; break;<br />            case 302: $text = 'Moved Temporarily'; break;<br />            case 303: $text = 'See Other'; break;<br />            case 304: $text = 'Not Modified'; break;<br />            case 305: $text = 'Use Proxy'; break;<br />            case 400: $text = 'Bad Request'; break;<br />            case 401: $text = 'Unauthorized'; break;<br />            case 402: $text = 'Payment Required'; break;<br />            case 403: $text = 'Forbidden'; break;<br />            case 404: $text = 'Not Found'; break;<br />            case 405: $text = 'Method Not Allowed'; break;<br />            case 406: $text = 'Not Acceptable'; break;<br />            case 407: $text = 'Proxy Authentication Required'; break;<br />            case 408: $text = 'Request Time-out'; break;<br />            case 409: $text = 'Conflict'; break;<br />            case 410: $text = 'Gone'; break;<br />            case 411: $text = 'Length Required'; break;<br />            case 412: $text = 'Precondition Failed'; break;<br />            case 413: $text = 'Request Entity Too Large'; break;<br />            case 414: $text = 'Request-URI Too Large'; break;<br />            case 415: $text = 'Unsupported Media Type'; break;<br />            case 500: $text = 'Internal Server Error'; break;<br />            case 501: $text = 'Not Implemented'; break;<br />            case 502: $text = 'Bad Gateway'; break;<br />            case 503: $text = 'Service Unavailable'; break;<br />            case 504: $text = 'Gateway Time-out'; break;<br />            case 505: $text = 'HTTP Version not supported'; break;<br />            default:<br />                trigger_error('Unknown http status code ' . $code, E_USER_ERROR); // exit('Unknown http status code "' . htmlentities($code) . '"');<br />                return $prev_code;<br />        }<br /><br />        $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');<br />        header($protocol . ' ' . $code . ' ' . $text);<br />        $GLOBALS['http_response_code'] = $code;<br /><br />        // original function always returns the previous or current code<br />        return $prev_code;<br />    }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.http-response-code&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.http-response-code.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.headers-sent.php" title="headers_&#8203;sent">headers_&#8203;sent</a>
                        </li>
                                                <li class="">
                            <a href="function.http-clear-last-response-headers.php" title="http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-get-last-response-headers.php" title="http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="current">
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
