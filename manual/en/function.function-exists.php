<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: function_exists - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.function-exists.php">
 <link rel="shorturl" href="https://www.php.net/function-exists">
 <link rel="alternate" href="https://www.php.net/function-exists" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.funchand.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.func-num-args.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-defined-functions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.function-exists.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.function-exists.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.function-exists.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.function-exists.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.function-exists.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.function-exists.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.function-exists.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.function-exists.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.function-exists.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.function-exists.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.function-exists.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return true if the given function has been defined" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: function_exists - Manual" />
<meta name="twitter:description" content="Return true if the given function has been defined" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: function_exists - Manual" />
<meta itemprop="description" content="Return true if the given function has been defined" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return true if the given function has been defined" />

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
        <a href="function.get-defined-functions.php">
          get_defined_functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.func-num-args.php">
          &laquo; func_num_args        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.funchand.php'>Function Handling</a></li>      <li><a href='ref.funchand.php'>Function handling Functions</a></li>      </ul>
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
            <option value='en/function.function-exists.php' selected="selected">English</option>
            <option value='de/function.function-exists.php'>German</option>
            <option value='es/function.function-exists.php'>Spanish</option>
            <option value='fr/function.function-exists.php'>French</option>
            <option value='it/function.function-exists.php'>Italian</option>
            <option value='ja/function.function-exists.php'>Japanese</option>
            <option value='pt_BR/function.function-exists.php'>Brazilian Portuguese</option>
            <option value='ru/function.function-exists.php'>Russian</option>
            <option value='tr/function.function-exists.php'>Turkish</option>
            <option value='uk/function.function-exists.php'>Ukrainian</option>
            <option value='zh/function.function-exists.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.function-exists" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">function_exists</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">function_exists</span> &mdash; <span class="dc-title">Return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the given function has been defined</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.function-exists-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>function_exists</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$function</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Checks the list of defined functions, both built-in (internal) and
   user-defined, for <code class="parameter">function</code>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.function-exists-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">function</code></dt>
     <dd>
      <p class="para">
       The function name, as a string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.function-exists-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">function</code> exists and is a
   function, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for constructs, such as 
    <span class="function"><a href="function.include-once.php" class="function">include_once</a></span> and <span class="function"><a href="function.echo.php" class="function">echo</a></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 examples" id="refsect1-function.function-exists-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5407">
    <p><strong>Example #1 <span class="function"><strong>function_exists()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imap_open'</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"IMAP functions are available.&lt;br /&gt;\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"IMAP functions are not available.&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.function-exists-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    A function name may exist even if the function itself is unusable due to
    configuration or compiling options (with the <a href="ref.image.php" class="link">image</a> functions being an example).
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.function-exists-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.method-exists.php" class="function" rel="rdfs-seeAlso">method_exists()</a> - Checks if the class method exists</span></li>
    <li><span class="function"><a href="function.is-callable.php" class="function" rel="rdfs-seeAlso">is_callable()</a> - Verify that a value can be called as a function from the current scope</span></li>
    <li><span class="function"><a href="function.get-defined-functions.php" class="function" rel="rdfs-seeAlso">get_defined_functions()</a> - Returns an array of all defined functions</span></li>
    <li><span class="function"><a href="function.class-exists.php" class="function" rel="rdfs-seeAlso">class_exists()</a> - Checks if the class has been defined</span></li>
    <li><span class="function"><a href="function.extension-loaded.php" class="function" rel="rdfs-seeAlso">extension_loaded()</a> - Find out whether an extension is loaded</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/funchand/functions/function-exists.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.function-exists%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.function-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.function-exists.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110163">  <div class="votes">
    <div id="Vu110163">
    <a href="/manual/vote-note.php?id=110163&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110163">
    <a href="/manual/vote-note.php?id=110163&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110163" title="63% like this...">
    38
    </div>
  </div>
  <a href="#110163" class="name">
  <strong class="user"><em>kitchin</em></strong></a><a class="genanchor" href="#110163"> &para;</a><div class="date" title="2012-09-25 12:49"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110163">
<div class="phpcode"><code><span class="html">You can use this function to conditionally define functions, see: <a href="http://php.net/manual/en/functions.user-defined.php" rel="nofollow" target="_blank">http://php.net/manual/en/functions.user-defined.php</a>
<br />
<br />For instance Wordpress uses it to make functions "pluggable." If a plugin has already defined a pluggable function, then the WP code knows not to try to redefine it.
<br />
<br />But function_exists() will always return true unless you wrap any later function definition in a conditional clause, like if(){...}. This is a subtle matter in PHP parsing. Some examples:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">)) {
<br />  print </span><span class="string">"foo defined\\n"</span><span class="keyword">;
<br />} else {
<br />  print </span><span class="string">"foo not defined\\n"</span><span class="keyword">;
<br />}
<br />function </span><span class="default">foo</span><span class="keyword">() {}
<br />
<br />if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">)) {
<br />  print </span><span class="string">"bar defined\\n"</span><span class="keyword">;
<br />} else {
<br />  print </span><span class="string">"defining bar\\n"</span><span class="keyword">;
<br />  function </span><span class="default">bar</span><span class="keyword">() {}
<br />}
<br />print </span><span class="string">"calling bar\\n"</span><span class="keyword">;
<br /></span><span class="default">bar</span><span class="keyword">(); </span><span class="comment">// ok to call function conditionally defined earlier
<br />
<br /></span><span class="keyword">print </span><span class="string">"calling baz\\n"</span><span class="keyword">;
<br /></span><span class="default">baz</span><span class="keyword">(); </span><span class="comment">// ok to call function unconditionally defined later
<br /></span><span class="keyword">function </span><span class="default">baz</span><span class="keyword">() {}
<br />
<br /></span><span class="default">qux</span><span class="keyword">(); </span><span class="comment">// NOT ok to call function conditionally defined later
<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'qux'</span><span class="keyword">)) {
<br />  function </span><span class="default">qux</span><span class="keyword">() {}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>Prints:
<br />  foo defined
<br />  defining bar
<br />  calling bar
<br />  calling baz
<br />  PHP Fatal error: Call to undefined function qux()
<br />
<br />Any oddities are probably due to the order in which you include/require files.</span></code></div>
  </div>
 </div>
  <div class="note" id="117916">  <div class="votes">
    <div id="Vu117916">
    <a href="/manual/vote-note.php?id=117916&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117916">
    <a href="/manual/vote-note.php?id=117916&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117916" title="64% like this...">
    29
    </div>
  </div>
  <a href="#117916" class="name">
  <strong class="user"><em>michael at squiloople dot com</em></strong></a><a class="genanchor" href="#117916"> &para;</a><div class="date" title="2015-09-01 08:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117916">
<div class="phpcode"><code><span class="html">It should be noted that the function_exists check is not relative to the root namespace. This means that the namespace should be appended to the check:<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">namespace </span><span class="default">test</span><span class="keyword">;<br /><br />  if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\example'</span><span class="keyword">))<br />  {<br /><br />    function </span><span class="default">example</span><span class="keyword">()<br />    {<br /><br />    }<br /><br />  }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126308">  <div class="votes">
    <div id="Vu126308">
    <a href="/manual/vote-note.php?id=126308&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126308">
    <a href="/manual/vote-note.php?id=126308&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126308" title="63% like this...">
    5
    </div>
  </div>
  <a href="#126308" class="name">
  <strong class="user"><em>chris at candm dot org dot uk</em></strong></a><a class="genanchor" href="#126308"> &para;</a><div class="date" title="2021-08-04 02:46"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126308">
<div class="phpcode"><code><span class="html">The confusion expressed in some of the submissions here arise because functions declared outside conditional blocks are defined as the code is loaded and are thus callable and exist wherever in the code they are declared, whereas those declared inside a condition block are not defined until that block is executed. Thus:<br /><br />    echo foo();<br />    function foo() { return "I am foo"; }<br /><br />yields : "I am foo"<br /><br />however because those inside a conditional are defined as they are encountered during code execution<br /><br />    echo foo();<br />    if(true) {<br />        function foo() { return "I am foo"; }<br />    }<br /><br />yields: Fatal error: Uncaught Error: Call to undefined function foo()</span></code></div>
  </div>
 </div>
  <div class="note" id="119092">  <div class="votes">
    <div id="Vu119092">
    <a href="/manual/vote-note.php?id=119092&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119092">
    <a href="/manual/vote-note.php?id=119092&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119092" title="59% like this...">
    9
    </div>
  </div>
  <a href="#119092" class="name">
  <strong class="user"><em>ayyappan dot ashok at gmail dot com</em></strong></a><a class="genanchor" href="#119092"> &para;</a><div class="date" title="2016-03-31 10:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119092">
<div class="phpcode"><code><span class="html">PHP supports nested function based on certain criteria.<br /><br />Please look over the code.<br /><br />function Media(){ }<br /><br />function Audio()<br />{<br />    echo "Plugged Audo 5.1:&lt;br/&gt;";<br />    function Volume()<br />    {<br />    echo "Volume controls:&lt;br/&gt;";<br />    function Equalizer()<br />    {<br />        echo "Equalize Bands:&lt;br/&gt;";<br />    }<br />   }<br />}<br />//Call to nested functions<br />Audio();<br />Volume();<br />Equalizer();<br /><br />if(function_exists('Volume')):<br />echo "TRUE";<br />else:<br />echo "FALSE";<br />endif;<br /><br />Case 1:  //Result :Works Well<br />--------<br />Audio();<br />Volume();<br />Equalizer();<br /><br />Case 2:  //Results Notice Error. Root function Audio must be called first.<br />--------<br />Volume();<br /><br />Case 3:  //Results Error. Root function Volume must be called.<br />--------<br />Audio();<br />Equalizer();<br /><br />Note : <br />The nested function should be called based on their order used.<br />In our example when Audio is not called and instantly when we try to call Volume puts under error. <br /><br />Even though there is an possibility to use nested functions in PHP. It looks overhead to do so. Better to avoid in logical ground of script.<br /><br />Tested on PHP 5.5.32</span></code></div>
  </div>
 </div>
  <div class="note" id="67947">  <div class="votes">
    <div id="Vu67947">
    <a href="/manual/vote-note.php?id=67947&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67947">
    <a href="/manual/vote-note.php?id=67947&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67947" title="59% like this...">
    8
    </div>
  </div>
  <a href="#67947" class="name">
  <strong class="user"><em>andi at splitbrain dot org</em></strong></a><a class="genanchor" href="#67947"> &para;</a><div class="date" title="2006-07-07 03:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67947">
<div class="phpcode"><code><span class="html">function_exists will return false for functions disabled with the disable_functions ini directive. However those functions are still declared so trying to define them yourself will fail.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'readfile'</span><span class="keyword">)){
<br />  function </span><span class="default">readfile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">){
<br />    </span><span class="default">$handle</span><span class="keyword">=@</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$cache</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />    echo @</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">,</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));
<br />    @</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />  }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />The above will issue a "Cannot redeclare readfile()" fatal error if readfile was disabled with disable_functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="53663">  <div class="votes">
    <div id="Vu53663">
    <a href="/manual/vote-note.php?id=53663&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53663">
    <a href="/manual/vote-note.php?id=53663&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53663" title="60% like this...">
    4
    </div>
  </div>
  <a href="#53663" class="name">
  <strong class="user"><em>fili at fili dot nl</em></strong></a><a class="genanchor" href="#53663"> &para;</a><div class="date" title="2005-06-08 09:24"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53663">
<div class="phpcode"><code><span class="html">To prevent direct calls to included files i use the following technique.<br /><br />In the main file create an empty function with a random name. Like so:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">hjudejdjiwe</span><span class="keyword">() { return </span><span class="default">true</span><span class="keyword">; }<br /></span><span class="default">?&gt;<br /></span><br />Then check for the existence of this function within your include:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'hjudejdjiwe'</span><span class="keyword">)) { die(</span><span class="string">'!'</span><span class="keyword">); }<br /></span><span class="default">?&gt;<br /></span><br />Simple but effective.</span></code></div>
  </div>
 </div>
  <div class="note" id="117858">  <div class="votes">
    <div id="Vu117858">
    <a href="/manual/vote-note.php?id=117858&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117858">
    <a href="/manual/vote-note.php?id=117858&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117858" title="55% like this...">
    3
    </div>
  </div>
  <a href="#117858" class="name">
  <strong class="user"><em>BruceB</em></strong></a><a class="genanchor" href="#117858"> &para;</a><div class="date" title="2015-08-21 03:55"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117858">
<div class="phpcode"><code><span class="html">This is not going to go down as you might expect it should (even if you play smart and require/include_once):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'my_function'</span><span class="keyword">))<br />{<br />   throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"'my_function' is already defined!"</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">my_function</span><span class="keyword">()<br />{<br />   </span><span class="comment">// Do the work here<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />This, however does work:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if( ! </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'my_function'</span><span class="keyword">))<br />{<br />   function </span><span class="default">my_function</span><span class="keyword">()<br />   {<br />      </span><span class="comment">// Do the work here<br />   </span><span class="keyword">}<br />}<br />else<br />{<br />   throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"'my_function' is already defined!"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Does it have anything to do with PHP parse/execute phases or global/local scope or those curly brackets or something else, I have no idea, but the latter ugly son works, while the former bombs out claiming that 'my_function' is already defined.<br /><br />Thought this might save someone a few minutes of debugging time...</span></code></div>
  </div>
 </div>
  <div class="note" id="77980">  <div class="votes">
    <div id="Vu77980">
    <a href="/manual/vote-note.php?id=77980&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77980">
    <a href="/manual/vote-note.php?id=77980&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77980" title="51% like this...">
    1
    </div>
  </div>
  <a href="#77980" class="name">
  <strong class="user"><em>webmaster at mamo-net dot de</em></strong></a><a class="genanchor" href="#77980"> &para;</a><div class="date" title="2007-09-22 05:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77980">
<div class="phpcode"><code><span class="html">If you use suhosin.executor.func.blacklist instead of disabled_functions in your php.ini, function_exists will return true for a disabled function. I used this to have the same beahviour with suhosin.executor.func.blacklist and disabled_functions:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">suhosin_function_exists</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">) {<br />    if (</span><span class="default">extension_loaded</span><span class="keyword">(</span><span class="string">'suhosin'</span><span class="keyword">)) {<br />        </span><span class="default">$suhosin </span><span class="keyword">= @</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"suhosin.executor.func.blacklist"</span><span class="keyword">);<br />        if (empty(</span><span class="default">$suhosin</span><span class="keyword">) == </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$suhosin </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">$suhosin</span><span class="keyword">);<br />            </span><span class="default">$suhosin </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'trim'</span><span class="keyword">, </span><span class="default">$suhosin</span><span class="keyword">);<br />            </span><span class="default">$suhosin </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strtolower'</span><span class="keyword">, </span><span class="default">$suhosin</span><span class="keyword">);<br />            return (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">) == </span><span class="default">true </span><span class="keyword">&amp;&amp; </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$suhosin</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">);<br />        }<br />    }<br />    return </span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108018">  <div class="votes">
    <div id="Vu108018">
    <a href="/manual/vote-note.php?id=108018&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108018">
    <a href="/manual/vote-note.php?id=108018&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108018" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108018" class="name">
  <strong class="user"><em>admin at gk-root dot com</em></strong></a><a class="genanchor" href="#108018"> &para;</a><div class="date" title="2012-03-22 02:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108018">
<div class="phpcode"><code><span class="html">// If you want to chack if the function is enabled or disable in php.ini you can use this function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">func_enabled</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">) {<br />    </span><span class="default">$disabled </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'disable_functions'</span><span class="keyword">));<br />    foreach (</span><span class="default">$disabled </span><span class="keyword">as </span><span class="default">$disableFunction</span><span class="keyword">) {<br />        </span><span class="default">$is_disabled</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$disableFunction</span><span class="keyword">);<br />    }<br />    if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">,</span><span class="default">$is_disabled</span><span class="keyword">)) {<br />        </span><span class="default">$it_is_disabled</span><span class="keyword">[</span><span class="string">"m"</span><span class="keyword">] = </span><span class="default">$func</span><span class="keyword">.</span><span class="string">'() has been disabled for security reasons in php.ini'</span><span class="keyword">;<br />        </span><span class="default">$it_is_disabled</span><span class="keyword">[</span><span class="string">"s"</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$it_is_disabled</span><span class="keyword">[</span><span class="string">"m"</span><span class="keyword">] = </span><span class="default">$func</span><span class="keyword">.</span><span class="string">'() is allow to use'</span><span class="keyword">;<br />        </span><span class="default">$it_is_disabled</span><span class="keyword">[</span><span class="string">"s"</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$it_is_disabled</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />// An example of how to use:<br /><br /><span class="default">&lt;?php<br />$if_is_disabled </span><span class="keyword">= </span><span class="default">func_enabled</span><span class="keyword">(</span><span class="string">'exec'</span><span class="keyword">); </span><span class="comment">// return Arrey<br /></span><span class="keyword">echo </span><span class="default">$if_is_disabled</span><span class="keyword">[</span><span class="string">"m"</span><span class="keyword">]; </span><span class="comment">// return text value<br /></span><span class="keyword">echo </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">; <br />echo </span><span class="default">$if_is_disabled</span><span class="keyword">[</span><span class="string">"s"</span><span class="keyword">]; </span><span class="comment">// return 1 or 0<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68186">  <div class="votes">
    <div id="Vu68186">
    <a href="/manual/vote-note.php?id=68186&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68186">
    <a href="/manual/vote-note.php?id=68186&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68186" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68186" class="name">
  <strong class="user"><em>Dan</em></strong></a><a class="genanchor" href="#68186"> &para;</a><div class="date" title="2006-07-17 08:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68186">
<div class="phpcode"><code><span class="html">I would like to comment on the following post:<br /><br />A note of caution: function_exists() appears to be case-insensitive (at least as of PHP 4.3.8).  e.g.:<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">function </span><span class="default">MyCasedFunction</span><span class="keyword">() {<br />       return </span><span class="default">true</span><span class="keyword">;<br />   }<br /><br />   </span><span class="comment">// Will return true, even though casing is "wrong"<br />   </span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"mYcAsEdFuNcTiOn"</span><span class="keyword">))<br />       echo </span><span class="string">"I see it!"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span> <br /><br />I believe that function calls itself are case insensitve, so this function is returning a valid truth. PHP doesn't care about cases.</span></code></div>
  </div>
 </div>
  <div class="note" id="40613">  <div class="votes">
    <div id="Vu40613">
    <a href="/manual/vote-note.php?id=40613&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40613">
    <a href="/manual/vote-note.php?id=40613&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40613" title="50% like this...">
    0
    </div>
  </div>
  <a href="#40613" class="name">
  <strong class="user"><em>ckrack at i-z dot de</em></strong></a><a class="genanchor" href="#40613"> &para;</a><div class="date" title="2004-03-09 12:22"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40613">
<div class="phpcode"><code><span class="html">i was wondering whether is_callable or function exists is faster when checking class methods.<br /><br />is_callable(array('foo', 'bar'));<br />function_exists('foo::bar');<br /><br />my results when doing each operation 10000 times with a simple test class were the following:<br /><br />is_callable: 0.28671383857727 seconds<br />function_exists: 0.14569997787476 seconds<br /><br />(following tests have proved this to be true).<br /><br />thus you can see, function_exists is twice as fast as is_callable.</span></code></div>
  </div>
 </div>
  <div class="note" id="34517">  <div class="votes">
    <div id="Vu34517">
    <a href="/manual/vote-note.php?id=34517&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34517">
    <a href="/manual/vote-note.php?id=34517&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34517" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#34517" class="name">
  <strong class="user"><em>breadman</em></strong></a><a class="genanchor" href="#34517"> &para;</a><div class="date" title="2003-07-29 05:17"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34517">
<div class="phpcode"><code><span class="html">Functions within a function are better off as anonymous returns from create_function(), unless you want to be able to call it elsewhere.<br /><br />However, I have used this in skinning:  I use alert_box() to display certain errors, like a faulty SQL query.  This simply calls display_alert(), which is defined in my skin scripts.  However, alert_box() is sometimes called before I know which skin to load, so it has its own functionality which it uses if function_exists('display_alert') returns false.</span></code></div>
  </div>
 </div>
  <div class="note" id="65974">  <div class="votes">
    <div id="Vu65974">
    <a href="/manual/vote-note.php?id=65974&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65974">
    <a href="/manual/vote-note.php?id=65974&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65974" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#65974" class="name">
  <strong class="user"><em>neelam_ab2003 at yahoo dot co dot in</em></strong></a><a class="genanchor" href="#65974"> &para;</a><div class="date" title="2006-05-11 12:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65974">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/*PHP doesn't Support nested functions. I have tried following in PHP_VERSION - 5.1.2*/<br /><br /></span><span class="keyword">function </span><span class="default">A</span><span class="keyword">(){}<br /><br />function </span><span class="default">B</span><span class="keyword">(){<br />    function </span><span class="default">C</span><span class="keyword">(){<br />        function </span><span class="default">D</span><span class="keyword">(){}<br />    }<br />}<br /><br /></span><span class="default">IsFunctionExist</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">);<br /></span><span class="default">IsFunctionExist</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">);<br /></span><span class="default">IsFunctionExist</span><span class="keyword">(</span><span class="string">'C'</span><span class="keyword">);<br /></span><span class="default">IsFunctionExist</span><span class="keyword">(</span><span class="string">'D'</span><span class="keyword">);<br /><br />function </span><span class="default">IsFunctionExist</span><span class="keyword">(</span><span class="default">$funcName</span><span class="keyword">){<br />    echo </span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$funcName</span><span class="keyword">)?</span><span class="string">" </span><span class="default">$funcName</span><span class="string"> exist &lt;br&gt;"</span><span class="keyword">:</span><span class="string">" </span><span class="default">$funcName</span><span class="string"> doesn't exist &lt;br&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />/*O U T P U T<br />A exist <br />B exist <br />C doesn't exist <br />D doesn't exist <br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="43505">  <div class="votes">
    <div id="Vu43505">
    <a href="/manual/vote-note.php?id=43505&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43505">
    <a href="/manual/vote-note.php?id=43505&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43505" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#43505" class="name">
  <strong class="user"><em>bob at thethirdshift dot net</em></strong></a><a class="genanchor" href="#43505"> &para;</a><div class="date" title="2004-06-23 09:55"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43505">
<div class="phpcode"><code><span class="html">I, too, was wondering whether is_callable or function exists is faster when checking class methods.  So, I setup the following test:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">doTimes</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">)<br />  {<br />    </span><span class="default">$start_time </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">);<br />    </span><span class="default">$start_time </span><span class="keyword">= </span><span class="default">$start_time</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + </span><span class="default">$start_time</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    </span><span class="default">$end_time </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">);<br />    </span><span class="default">$end_time </span><span class="keyword">= </span><span class="default">$end_time</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + </span><span class="default">$end_time</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">$end_time </span><span class="keyword">- </span><span class="default">$start_time</span><span class="keyword">;<br />    return </span><span class="default">$time</span><span class="keyword">;<br />  }<br /><br />class </span><span class="default">test<br />  </span><span class="keyword">{<br />      function </span><span class="default">test</span><span class="keyword">()<br />      {<br />          return </span><span class="default">true</span><span class="keyword">;<br />      }<br />  }<br />  <br /></span><span class="default">$callableIsTrue </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$startIsCallable </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">();<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />      if(</span><span class="default">is_callable</span><span class="keyword">(array(</span><span class="string">'test'</span><span class="keyword">, </span><span class="string">'test'</span><span class="keyword">))) { </span><span class="default">$callableIsTrue </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; }<br />  }<br /></span><span class="default">$endIsCallable </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">();<br /><br /></span><span class="default">$existsIsTrue </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$startExists </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">();<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />      if(</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'test::test'</span><span class="keyword">)) { </span><span class="default">$existsIsTrue </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; }<br />  }<br /></span><span class="default">$endExists </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">();<br /><br /></span><span class="default">$timeIsCallable </span><span class="keyword">= </span><span class="default">doTimes</span><span class="keyword">(</span><span class="default">$startIsCallable</span><span class="keyword">, </span><span class="default">$endIsCallable</span><span class="keyword">);<br /></span><span class="default">$timeExists     </span><span class="keyword">= </span><span class="default">doTimes</span><span class="keyword">(</span><span class="default">$startExists</span><span class="keyword">, </span><span class="default">$endExists</span><span class="keyword">);<br /><br />echo </span><span class="string">"&lt;b&gt;is_callable = "</span><span class="keyword">.(</span><span class="default">$callableIsTrue </span><span class="keyword">? </span><span class="string">"TRUE" </span><span class="keyword">: </span><span class="string">"FALSE"</span><span class="keyword">).</span><span class="string">"&lt;/b&gt;, \n"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;b&gt;function_exists = "</span><span class="keyword">.(</span><span class="default">$existsIsTrue </span><span class="keyword">? </span><span class="string">"TRUE" </span><span class="keyword">: </span><span class="string">"FALSE"</span><span class="keyword">).</span><span class="string">"&lt;/b&gt;&lt;br&gt;\n"</span><span class="keyword">;<br /><br />echo </span><span class="string">"&lt;br&gt;Did 10000 is_callables in "</span><span class="keyword">.</span><span class="default">$timeIsCallable</span><span class="keyword">.</span><span class="string">" seconds"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;br&gt;Did 10000 function_exists in "</span><span class="keyword">.</span><span class="default">$timeExists</span><span class="keyword">.</span><span class="string">" seconds"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This gives the output :<br /><br />is_callable = TRUE, function_exists = FALSE<br /><br />Did 10000 is_callables in 0.0640790462494 seconds<br />Did 10000 function_exists in 0.0304429531097 seconds<br /><br />So the fact that function_exists is twice as fast is slightly over shadowed by the fact that it doesn't work on class methods, at least not as far as I can tell.</span></code></div>
  </div>
 </div>
  <div class="note" id="33827">  <div class="votes">
    <div id="Vu33827">
    <a href="/manual/vote-note.php?id=33827&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33827">
    <a href="/manual/vote-note.php?id=33827&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33827" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#33827" class="name">
  <strong class="user"><em>dshearin at excite dot com</em></strong></a><a class="genanchor" href="#33827"> &para;</a><div class="date" title="2003-07-08 03:15"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33827">
<div class="phpcode"><code><span class="html">This can be used to conditionally define a user function. In this sense, it can act as a sort of inline include_once(). 
<br />
<br />For example, suppose you have a function A that calls function B. B is only used inside function A and is never called from anywhere else in the script. It's logical (and perfectly legal in PHP) to define B inside of A's definition, like so: 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">A</span><span class="keyword">(</span><span class="default">$inputArray</span><span class="keyword">)
<br />{
<br />   if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">))
<br />   {
<br />      function </span><span class="default">B</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">)
<br />      {
<br />           </span><span class="comment">// Do something with $item
<br />         // and return result
<br />          </span><span class="keyword">return </span><span class="default">$result</span><span class="keyword">;
<br />      }
<br />   }
<br />   foreach (</span><span class="default">$inputArray </span><span class="keyword">as </span><span class="default">$nextItem</span><span class="keyword">) </span><span class="default">$outputArray</span><span class="keyword">[] = </span><span class="default">B</span><span class="keyword">(</span><span class="default">$nextItem</span><span class="keyword">);
<br />   return </span><span class="default">$outputArray</span><span class="keyword">;    
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Without the function_exists test, you would get a fatal error the second time you called A, as PHP would think you were trying to redefine B (not legal in PHP). The placement of the test is also important. Since the if block is executed sequentially, like any other block of code, it must come before any call to the function defined within.</span></code></div>
  </div>
 </div>
  <div class="note" id="72713">  <div class="votes">
    <div id="Vu72713">
    <a href="/manual/vote-note.php?id=72713&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72713">
    <a href="/manual/vote-note.php?id=72713&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72713" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#72713" class="name">
  <strong class="user"><em>brooklynphil at hotmail dot com</em></strong></a><a class="genanchor" href="#72713"> &para;</a><div class="date" title="2007-01-30 11:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72713">
<div class="phpcode"><code><span class="html">to bob at thethirdshift dot net<br />regarding is_callable vs function_exists.<br /><br />using your code<br />is_callable = TRUE, function_exists = FALSE<br /><br />Did 10000 is_callables in 0.0443360805511 seconds<br />Did 10000 function_exists in 0.0111110210419 seconds<br /><br />then we replace<br />is_callable(array('test','test'));<br />with<br />$callarray = array('test','test'); // place this outside for-loop<br />is_callable($callarray);<br /><br />is_callable = TRUE, function_exists = FALSE<br /><br />Did 10000 is_callables in 0.0314660072327 seconds<br />Did 10000 function_exists in 0.0120670795441 seconds<br /><br />then we replace<br />is_callable(array('test','test'));<br />with<br />is_callable('test','test');<br /><br />is_callable = TRUE, function_exists = FALSE<br /><br />Did 10000 is_callables in 0.00991606712341 seconds<br />Did 10000 function_exists in 0.0113790035248 seconds<br /><br />I hope you can see that loop-testing functions is not so simple. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="81921">  <div class="votes">
    <div id="Vu81921">
    <a href="/manual/vote-note.php?id=81921&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81921">
    <a href="/manual/vote-note.php?id=81921&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81921" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#81921" class="name">
  <strong class="user"><em>php at fluidthoughts dot com</em></strong></a><a class="genanchor" href="#81921"> &para;</a><div class="date" title="2008-03-19 10:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81921">
<div class="phpcode"><code><span class="html">function_exists returns false on NULL and empty string:<br /><br /><span class="default">&lt;?php<br />        </span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">)) {<br />                echo </span><span class="string">"empty string function exists\n"</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">)) {<br />                echo </span><span class="string">"NULL function exists\n"</span><span class="keyword">;<br />        }<br /></span><span class="default">?&gt;<br /></span><br />Neither of the echo statements happen when I run this.</span></code></div>
  </div>
 </div>
  <div class="note" id="77803">  <div class="votes">
    <div id="Vu77803">
    <a href="/manual/vote-note.php?id=77803&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77803">
    <a href="/manual/vote-note.php?id=77803&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77803" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#77803" class="name">
  <strong class="user"><em>White-Gandalf</em></strong></a><a class="genanchor" href="#77803"> &para;</a><div class="date" title="2007-09-13 07:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77803">
<div class="phpcode"><code><span class="html">I stumbled over the same problem as "eddiec" (users not able or not willing to use "_once"-suffixes).<br /><br />A possible alternative explanation for the behavior:<br /><br />If a file is included, it is possibly parsed every include-time.(?)<br />While parsing, every function in global scope is tried to register. THIS gets wrong, when multiple times included, and it produces an error.<br /><br />If functions are defined within block scopes, their registration seems to be delayed until execution of such a block. Thus, not the function "function_exists" functions wrong, but simply the philosophy of the interpreter produces such results.<br /><br />Thus, the same effect can be achieved by simply putting block braces around the contents of an include_once file:<br /><br />if (function_exists('function_in_question')) return;<br />{<br />    function function_in_question(...)<br />    {<br />        ...<br />    }<br />    ...other stuff<br />}<br /><br />...which is equivalent to...<br /><br />if (!function_exists('function_in_question'))<br />{<br />    function function_in_question(...)<br />    {<br />        ...<br />    }<br />    ...other stuff<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="114322">  <div class="votes">
    <div id="Vu114322">
    <a href="/manual/vote-note.php?id=114322&amp;page=function.function-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114322">
    <a href="/manual/vote-note.php?id=114322&amp;page=function.function-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114322" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#114322" class="name">
  <strong class="user"><em>b dot g dot dariush at gmail dot com</em></strong></a><a class="genanchor" href="#114322"> &para;</a><div class="date" title="2014-02-07 05:50"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114322">
<div class="phpcode"><code><span class="html">function_exists() does not cache its query internally.<br /><br />by executing the following code<br /><br />        $funcs = \array_shift(\get_defined_functions());<br />        $l = new \core\utiles\loadTime;<br />        $times = 0;<br />        $l-&gt;start();<br />        for($index = 0; $index&lt;count($funcs); $index++)<br />        {<br />            foreach($funcs as $func)<br />            {<br />                $times++;<br />                if(\function_exists($func)) ;<br />            }<br />        }<br />        $s = $l-&gt;stop();<br />        echo "&lt;span style='color:green'&gt;$times&lt;/span&gt; took : $s";<br />        # the output would be <br />         $&gt; 2365444 took : 0.70324<br /><br />By executing the <br /><br />        $funcs = \array_shift(\get_defined_functions());<br />        $l = new \core\utiles\loadTime;<br />        $times = 0;<br />        $l-&gt;start();<br />        static $func_check = array();<br />        for($index = 0; $index&lt;count($funcs); $index++)<br />        {<br />            foreach($funcs as $func)<br />            {<br />                $times++;<br />                if(!isset($func_check[$func]))<br />                {<br />                    if(\function_exists($func)) ;<br />                    $func_check[$func] = 1;<br />                }<br />                else $func_check[$func];<br />            }<br />        }<br />        $s = $l-&gt;stop();<br />        echo "&lt;span style='color:green'&gt;$times&lt;/span&gt; took : $s";<br />        # the output would be <br />        $&gt; 2365444 took : 0.53446<br /><br />There is a 0.16878 seconds improvement, when you use static array to cache methods existence.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.function-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.function-exists.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.funchand.php">Function handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.call-user-func.php" title="call_&#8203;user_&#8203;func">call_&#8203;user_&#8203;func</a>
                        </li>
                                                <li class="">
                            <a href="function.call-user-func-array.php" title="call_&#8203;user_&#8203;func_&#8203;array">call_&#8203;user_&#8203;func_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call.php" title="forward_&#8203;static_&#8203;call">forward_&#8203;static_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call-array.php" title="forward_&#8203;static_&#8203;call_&#8203;array">forward_&#8203;static_&#8203;call_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-arg.php" title="func_&#8203;get_&#8203;arg">func_&#8203;get_&#8203;arg</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-args.php" title="func_&#8203;get_&#8203;args">func_&#8203;get_&#8203;args</a>
                        </li>
                                                <li class="">
                            <a href="function.func-num-args.php" title="func_&#8203;num_&#8203;args">func_&#8203;num_&#8203;args</a>
                        </li>
                                                <li class="current">
                            <a href="function.function-exists.php" title="function_&#8203;exists">function_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-functions.php" title="get_&#8203;defined_&#8203;functions">get_&#8203;defined_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.register-shutdown-function.php" title="register_&#8203;shutdown_&#8203;function">register_&#8203;shutdown_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.register-tick-function.php" title="register_&#8203;tick_&#8203;function">register_&#8203;tick_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.unregister-tick-function.php" title="unregister_&#8203;tick_&#8203;function">unregister_&#8203;tick_&#8203;function</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.create-function.php" title="create_&#8203;function">create_&#8203;function</a>
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
