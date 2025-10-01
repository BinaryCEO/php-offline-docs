<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Variable scope - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.variables.scope.php">
 <link rel="shorturl" href="https://www.php.net/variables.scope">
 <link rel="alternate" href="https://www.php.net/variables.scope" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.variables.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.variables.predefined.php">
 <link rel="next" href="https://www.php.net/manual/en/language.variables.variable.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.variables.scope.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.variables.scope.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.variables.scope.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.variables.scope.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.variables.scope.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.variables.scope.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.variables.scope.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.variables.scope.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.variables.scope.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.variables.scope.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.variables.scope.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Variable scope" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Variable scope - Manual" />
<meta name="twitter:description" content="Variable scope" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Variable scope - Manual" />
<meta itemprop="description" content="Variable scope" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Variable scope" />

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
        <a href="language.variables.variable.php">
          Variable variables &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.variables.predefined.php">
          &laquo; Predefined Variables        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.variables.php'>Variables</a></li>      </ul>
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
            <option value='en/language.variables.scope.php' selected="selected">English</option>
            <option value='de/language.variables.scope.php'>German</option>
            <option value='es/language.variables.scope.php'>Spanish</option>
            <option value='fr/language.variables.scope.php'>French</option>
            <option value='it/language.variables.scope.php'>Italian</option>
            <option value='ja/language.variables.scope.php'>Japanese</option>
            <option value='pt_BR/language.variables.scope.php'>Brazilian Portuguese</option>
            <option value='ru/language.variables.scope.php'>Russian</option>
            <option value='tr/language.variables.scope.php'>Turkish</option>
            <option value='uk/language.variables.scope.php'>Ukrainian</option>
            <option value='zh/language.variables.scope.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.variables.scope" class="sect1">
   <h2 class="title">Variable scope</h2>

   <p class="simpara">
    The scope of a variable is the context within which it is defined.
    PHP has a function scope and a global scope.
    Any variable defined outside a function is limited to the global scope.
    When a file is included, the code it contains inherits the variable scope
    of the line on which the include occurs.
   </p>
   <div class="example" id="example-131">
    <p><strong>Example #1 Example of global variable scope</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />include </span><span style="color: #DD0000">'b.inc'</span><span style="color: #007700">; </span><span style="color: #FF8000">// Variable $a will be available within b.inc<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="simpara">
    Any variable created inside a named function or an
    <a href="functions.anonymous.php" class="link">anonymous</a> function
    is limited to the scope of the function body.
    However, <a href="functions.arrow.php" class="link">arrow functions</a>
    bind variables from the parent scope to make them available inside the body.
    If a file include occurs inside a function within
    the calling file, the variables contained in the called file will be
    available as if they had been defined inside the calling function.
   </p>
    
   <div class="example" id="example-132">
    <p><strong>Example #2 Example of local variable scope</strong></p>
    <div class="example-contents"> 
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">// global scope<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />{ <br />    echo </span><span style="color: #0000BB">$a</span><span style="color: #007700">; </span><span style="color: #FF8000">// Variable $a is undefined as it refers to a local version of $a<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="simpara">
    The example above will generate an undefined variable <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
    (or an <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> prior to PHP 8.0.0).
    This is because the echo statement
    refers to a local version of the <var class="varname">$a</var> variable,
    and it has not been assigned a value within this scope.
    Note that this is a little bit different from the C language in
    that global variables in C are automatically available to
    functions unless specifically overridden by a local definition.
    This can cause some problems in that people may inadvertently
    change a global variable. In PHP global variables must be
    declared global inside a function if they are going to be used in
    that function.
   </p>
       
   <div class="sect2" id="language.variables.scope.global">
    <h3 class="title">The <code class="literal">global</code> keyword</h3>
    <p class="simpara">
     The <code class="literal">global</code> keyword is used to bind a variable
     from a global scope into a local scope. The keyword can be used with
     a list of variables or a single variable. A local variable will be created
     referencing the global variable of the same name. If the global
     variable does not exist, the variable will be created in global scope and
     assigned <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
    </p>
    <p class="para">
     <div class="example" id="example-133">
      <p><strong>Example #3 Using <code class="literal">global</code></strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">Sum</span><span style="color: #007700">()<br />{<br />    global </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br />} <br /><br /></span><span style="color: #0000BB">Sum</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
3
</pre></div>
      </div>
     </div>
    </p>

   <p class="simpara">
    By declaring
    <var class="varname">$a</var> and <var class="varname">$b</var> global within the
    function, all references to either variable will refer to the
    global version. There is no limit to the number of global
    variables that can be manipulated by a function.
   </p>

   <p class="simpara">
    A second way to access variables from the global scope is to use
    the special PHP-defined <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> array. The
    previous example can be rewritten as:
   </p>
   <p class="para">
    <div class="example" id="example-134">
     <p><strong>Example #4 Using <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> instead of global</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">Sum</span><span style="color: #007700">()<br />{<br />    </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'b'</span><span style="color: #007700">] = </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'a'</span><span style="color: #007700">] + </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'b'</span><span style="color: #007700">];<br />} <br /><br /></span><span style="color: #0000BB">Sum</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>

   <p class="simpara">
    The <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> array is an associative array with
    the name of the global variable being the key and the contents of
    that variable being the value of the array element.
    Notice how <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> exists in any scope, this 
    is because <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> is a <a href="language.variables.superglobals.php" class="link">superglobal</a>.
    Here&#039;s an example demonstrating the power of superglobals: 
   </p>
   <p class="para">
    <div class="example" id="example-135">
     <p><strong>Example #5 Example demonstrating superglobals and scope</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test_superglobal</span><span style="color: #007700">()<br />{<br />    echo </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">];<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Using <code class="literal">global</code> keyword outside a function is not an
     error. It can be used if the file is included from inside a function.
    </span>
   </p></blockquote>
  </div>
 
  <div class="sect2" id="language.variables.scope.static">
   <h3 class="title">Using <code class="literal">static</code> variables</h3>
   <p class="simpara">
    Another important feature of variable scoping is the
    <em>static</em> variable. A static variable exists
    only in a local function scope, but it does not lose its value
    when program execution leaves this scope. Consider the following
    example:
   </p>
   <p class="para">
    <div class="example" id="example-136">
     <p><strong>Example #6 Example demonstrating need for static variables</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />{<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$a</span><span style="color: #007700">++;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    This function is quite useless since every time it is called it
    sets <var class="varname">$a</var> to <code class="literal">0</code> and prints
    <code class="literal">0</code>. The <var class="varname">$a</var>++ which increments the
    variable serves no purpose since as soon as the function exits the
    <var class="varname">$a</var> variable disappears. To make a useful
    counting function which will not lose track of the current count,
    the <var class="varname">$a</var> variable is declared static:
   </p>
   <p class="para">
    <div class="example" id="example-137">
     <p><strong>Example #7 Example use of static variables</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />{<br />    static </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$a</span><span style="color: #007700">++;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    Now, <var class="varname">$a</var> is initialized only in first call of function
    and every time the <code class="literal">test()</code> function is called it will print the
    value of <var class="varname">$a</var> and increment it.
   </p>

   <p class="simpara">
    Static variables also provide one way to deal with recursive
    functions. The following
    simple function recursively counts to 10, using the static
    variable <var class="varname">$count</var> to know when to stop:
   </p>
   <p class="para">
    <div class="example" id="example-138">
     <p><strong>Example #8 Static variables with recursive functions</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />{<br />    static </span><span style="color: #0000BB">$count </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$count</span><span style="color: #007700">++;<br />    echo </span><span style="color: #0000BB">$count</span><span style="color: #007700">;<br />    if (</span><span style="color: #0000BB">$count </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">10</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">test</span><span style="color: #007700">();<br />    }<br />    </span><span style="color: #0000BB">$count</span><span style="color: #007700">--;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>

   <p class="para">
    Prior to PHP 8.3.0, static variables could only be initialized using
    a constant expression. As of PHP 8.3.0, dynamic expressions
    (e.g. function calls) are also allowed:
   </p>
   <p class="para">
    <div class="example" id="example-139">
     <p><strong>Example #9 Declaring static variables</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(){<br />    static </span><span style="color: #0000BB">$int </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;          </span><span style="color: #FF8000">// correct <br />    </span><span style="color: #007700">static </span><span style="color: #0000BB">$int </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">+</span><span style="color: #0000BB">2</span><span style="color: #007700">;        </span><span style="color: #FF8000">// correct<br />    </span><span style="color: #007700">static </span><span style="color: #0000BB">$int </span><span style="color: #007700">= </span><span style="color: #0000BB">sqrt</span><span style="color: #007700">(</span><span style="color: #0000BB">121</span><span style="color: #007700">);  </span><span style="color: #FF8000">// correct as of PHP 8.3.0<br /><br />    </span><span style="color: #0000BB">$int</span><span style="color: #007700">++;<br />    echo </span><span style="color: #0000BB">$int</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>

   <p class="simpara">
    Static variables inside anonymous functions persist only within that
    specific function instance. If the anonymous function is recreated on each
    call, the static variable will be reinitialized.
   </p>
   <div class="example" id="example-140">
    <p><strong>Example #10 Static variables in anonymous functions</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">exampleFunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= (static function () use (</span><span style="color: #0000BB">$input</span><span style="color: #007700">) {<br />        static </span><span style="color: #0000BB">$counter </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$counter</span><span style="color: #007700">++;<br />        return </span><span style="color: #DD0000">"Input: </span><span style="color: #0000BB">$input</span><span style="color: #DD0000">, Counter: </span><span style="color: #0000BB">$counter</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    });<br /><br />    return </span><span style="color: #0000BB">$result</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #FF8000">// Calls to exampleFunction will recreate the anonymous function, so the static<br />// variable does not retain its value.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">exampleFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">'A'</span><span style="color: #007700">); </span><span style="color: #FF8000">// Outputs: Input: A, Counter: 1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">exampleFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">'B'</span><span style="color: #007700">); </span><span style="color: #FF8000">// Outputs: Input: B, Counter: 1<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="para">
    As of PHP 8.1.0, when a method using static variables is inherited (but not overridden),
    the inherited method will now share static variables with the parent method.
    This means that static variables in methods now behave the same way as static properties.
   </p>

   <p class="simpara">
    As of PHP 8.3.0, static variables can be initialized with arbitrary expressions.
    This means that method calls, for example, can be used to initialize static variables.
   </p>

   <div class="example" id="example-141">
    <p><strong>Example #11 Usage of static Variables in Inherited Methods</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">counter</span><span style="color: #007700">() {<br />        static </span><span style="color: #0000BB">$counter </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$counter</span><span style="color: #007700">++;<br />        return </span><span style="color: #0000BB">$counter</span><span style="color: #007700">;<br />    }<br />}<br />class </span><span style="color: #0000BB">Bar </span><span style="color: #007700">extends </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(1)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(2)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">Bar</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(3), prior to PHP 8.1.0 int(1)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">Bar</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(4), prior to PHP 8.1.0 int(2)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.variables.scope.references">
   <h3 class="title">References with <code class="literal">global</code> and <code class="literal">static</code> variables</h3>
   <p class="simpara">
    PHP implements the
    <a href="language.variables.scope.php#language.variables.scope.static" class="link">static</a> and 
    <a href="language.variables.scope.php#language.variables.scope.global" class="link">global</a> modifier 
    for variables in terms of <a href="language.references.php" class="link">
    references</a>. For example, a true global variable
    imported inside a function scope with the <code class="literal">global</code>
    statement actually creates a reference to the global variable. This can
    lead to unexpected behaviour which the following example addresses:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test_global_ref</span><span style="color: #007700">() {<br />    global </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$new </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$obj </span><span style="color: #007700">= &amp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">test_global_noref</span><span style="color: #007700">() {<br />    global </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$new </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$obj </span><span style="color: #007700">= </span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">test_global_ref</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">test_global_noref</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="para">The above example will output:</p>

   <div class="example-contents screen">
<div class="cdata"><pre>
NULL
object(stdClass)#1 (0) {
}
</pre></div>
   </div>

   <p class="simpara">
    A similar behaviour applies to the <code class="literal">static</code> statement.
    References are not stored statically:
   </p>
   
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function &amp;</span><span style="color: #0000BB">get_instance_ref</span><span style="color: #007700">() {<br />    static </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br /><br />    echo </span><span style="color: #DD0000">'Static object: '</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">);<br />    if (!isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$new </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">;<br />        </span><span style="color: #FF8000">// Assign a reference to the static variable<br />        </span><span style="color: #0000BB">$obj </span><span style="color: #007700">= &amp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />    }<br />    if (!isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    } else {<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property</span><span style="color: #007700">++;<br />    }<br />    return </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br />}<br /><br />function &amp;</span><span style="color: #0000BB">get_instance_noref</span><span style="color: #007700">() {<br />    static </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br /><br />    echo </span><span style="color: #DD0000">'Static object: '</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">);<br />    if (!isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$new </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">;<br />        </span><span style="color: #FF8000">// Assign the object to the static variable<br />        </span><span style="color: #0000BB">$obj </span><span style="color: #007700">= </span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />    }<br />    if (!isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    } else {<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property</span><span style="color: #007700">++;<br />    }<br />    return </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$obj1 </span><span style="color: #007700">= </span><span style="color: #0000BB">get_instance_ref</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$still_obj1 </span><span style="color: #007700">= </span><span style="color: #0000BB">get_instance_ref</span><span style="color: #007700">();<br />echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj2 </span><span style="color: #007700">= </span><span style="color: #0000BB">get_instance_noref</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$still_obj2 </span><span style="color: #007700">= </span><span style="color: #0000BB">get_instance_noref</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Static object: NULL
Static object: NULL

Static object: NULL
Static object: object(stdClass)#3 (1) {
  [&quot;property&quot;]=&gt;
  int(1)
}
</pre></div>
   </div>

   <p class="simpara">
    This example demonstrates that when assigning a reference to a static
    variable, it is not <em>remembered</em> when the
    <code class="literal">&amp;get_instance_ref()</code> function is called a second time.
   </p>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/variables.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.variables.scope%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.variables.scope&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.variables.scope.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105925">  <div class="votes">
    <div id="Vu105925">
    <a href="/manual/vote-note.php?id=105925&amp;page=language.variables.scope&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105925">
    <a href="/manual/vote-note.php?id=105925&amp;page=language.variables.scope&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105925" title="76% like this...">
    239
    </div>
  </div>
  <a href="#105925" class="name">
  <strong class="user"><em>dodothedreamer at gmail dot com</em></strong></a><a class="genanchor" href="#105925"> &para;</a><div class="date" title="2011-09-25 11:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105925">
<div class="phpcode"><code><span class="html">Note that unlike Java and C++, variables declared inside blocks such as loops or if's, will also be recognized and accessible outside of the block, so:<br /><span class="default">&lt;?php<br /></span><span class="keyword">for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">3</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />{<br />     if(</span><span class="default">$j </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">)<br />        </span><span class="default">$a </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br />}<br />echo </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Would print 4.</span></code></div>
  </div>
 </div>
  <div class="note" id="59676">  <div class="votes">
    <div id="Vu59676">
    <a href="/manual/vote-note.php?id=59676&amp;page=language.variables.scope&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59676">
    <a href="/manual/vote-note.php?id=59676&amp;page=language.variables.scope&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59676" title="67% like this...">
    182
    </div>
  </div>
  <a href="#59676" class="name">
  <strong class="user"><em>warhog at warhog dot net</em></strong></a><a class="genanchor" href="#59676"> &para;</a><div class="date" title="2005-12-13 12:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59676">
<div class="phpcode"><code><span class="html">Some interesting behavior (tested with PHP5), using the static-scope-keyword inside of class-methods.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">sample_class<br /></span><span class="keyword">{<br />  public function </span><span class="default">func_having_static_var</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)<br />  {<br />    static </span><span class="default">$var </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    if (</span><span class="default">$x </span><span class="keyword">=== </span><span class="default">NULL</span><span class="keyword">)<br />    { return </span><span class="default">$var</span><span class="keyword">; }<br />    </span><span class="default">$var </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">sample_class</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">sample_class</span><span class="keyword">();<br /><br />echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">func_having_static_var</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">func_having_static_var</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// this will output (as expected):<br />//  0<br />//  0<br /><br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">func_having_static_var</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /><br />echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">func_having_static_var</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">func_having_static_var</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// this will output:<br />//  3<br />//  3<br />// maybe you expected:<br />//  3<br />//  0<br /><br /></span><span class="default">?&gt;<br /></span><br />One could expect "3 0" to be outputted, as you might think that $a-&gt;func_having_static_var(3); only alters the value of the static $var of the function "in" $a - but as the name says, these are class-methods. Having an object is just a collection of properties, the functions remain at the class. So if you declare a variable as static inside a function, it's static for the whole class and all of its instances, not for each object.<br /><br />Maybe it's senseless to post that.. cause if you want to have the behaviour that I expected, you can simply use a variable of the object itself:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">sample_class<br /></span><span class="keyword">{ protected </span><span class="default">$var </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />  function </span><span class="default">func</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)<br />  { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">var </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">; }<br />} </span><span class="default">?&gt;<br /></span><br />I believe that all normal-thinking people would never even try to make this work with the static-keyword, for those who try (like me), this note maybe helpfull.</span></code></div>
  </div>
 </div>
  <div class="note" id="88689">  <div class="votes">
    <div id="Vu88689">
    <a href="/manual/vote-note.php?id=88689&amp;page=language.variables.scope&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88689">
    <a href="/manual/vote-note.php?id=88689&amp;page=language.variables.scope&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88689" title="65% like this...">
    34
    </div>
  </div>
  <a href="#88689" class="name">
  <strong class="user"><em>andrew at planetubh dot com</em></strong></a><a class="genanchor" href="#88689"> &para;</a><div class="date" title="2009-02-03 12:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88689">
<div class="phpcode"><code><span class="html">Took me longer than I expected to figure this out, and thought others might find it useful.<br /><br />I created a function (safeinclude), which I use to include files; it does processing before the file is actually included (determine full path, check it exists, etc).<br /><br />Problem: Because the include was occurring inside the function, all of the variables inside the included file were inheriting the variable scope of the function; since the included files may or may not require global variables that are declared else where, it creates a problem.<br /><br />Most places (including here) seem to address this issue by something such as:<br /><span class="default">&lt;?php<br /></span><span class="comment">//declare this before include<br /></span><span class="keyword">global </span><span class="default">$myVar</span><span class="keyword">;<br /></span><span class="comment">//or declare this inside the include file<br /></span><span class="default">$nowglobal </span><span class="keyword">= </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'myVar'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />But, to make this work in this situation (where a standard PHP file is included within a function, being called from another PHP script; where it is important to have access to whatever global variables there may be)... it is not practical to employ the above method for EVERY variable in every PHP file being included by 'safeinclude', nor is it practical to staticly name every possible variable in the "global $this" approach. (namely because the code is modulized, and 'safeinclude' is meant to be generic)<br /><br />My solution: Thus, to make all my global variables available to the files included with my safeinclude function, I had to add the following code to my safeinclude function (before variables are used or file is included)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$GLOBALS </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) { global $</span><span class="default">$key</span><span class="keyword">; }<br /></span><span class="default">?&gt;<br /></span><br />Thus, complete code looks something like the following (very basic model):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">safeinclude</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />{<br />    </span><span class="comment">//This line takes all the global variables, and sets their scope within the function:<br />    </span><span class="keyword">foreach (</span><span class="default">$GLOBALS </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) { global $</span><span class="default">$key</span><span class="keyword">; }<br />    </span><span class="comment">/* Pre-Processing here: validate filename input, determine full path<br />        of file, check that file exists, etc. This is obviously not<br />        necessary, but steps I found useful. */<br />    </span><span class="keyword">if (</span><span class="default">$exists</span><span class="keyword">==</span><span class="default">true</span><span class="keyword">) { include(</span><span class="string">"</span><span class="default">$file</span><span class="string">"</span><span class="keyword">); }<br />    return </span><span class="default">$exists</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />In the above, 'exists' &amp; 'file' are determined in the pre-processing. File is the full server path to the file, and exists is set to true if the file exists. This basic model can be expanded of course.  In my own, I added additional optional parameters so that I can call safeinclude to see if a file exists without actually including it (to take advantage of my path/etc preprocessing, verses just calling the file exists function).<br /><br />Pretty simple approach that I could not find anywhere online; only other approach I could find was using PHP's eval().</span></code></div>
  </div>
 </div>
  <div class="note" id="118666">  <div class="votes">
    <div id="Vu118666">
    <a href="/manual/vote-note.php?id=118666&amp;page=language.variables.scope&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118666">
    <a href="/manual/vote-note.php?id=118666&amp;page=language.variables.scope&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118666" title="63% like this...">
    10
    </div>
  </div>
  <a href="#118666" class="name">
  <strong class="user"><em>gried at NOSPAM dot nsys dot by</em></strong></a><a class="genanchor" href="#118666"> &para;</a><div class="date" title="2016-01-16 09:12"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118666">
<div class="phpcode"><code><span class="html">In fact all variables represent pointers that hold address of memory area with data that was assigned to this variable. When you assign some variable value by reference you in fact write address of source variable to recepient variable. Same happens when you declare some variable as global in function, it receives same address as global variable outside of function. If you consider forementioned explanation it's obvious that mixing usage of same variable declared with keyword global and via superglobal array at the same time is very bad idea. In some cases they can point to different memory areas, giving you headache. Consider code below:<br /><br /><span class="default">&lt;?php<br /><br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br /></span><span class="default">$GLOB </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />function </span><span class="default">test_references</span><span class="keyword">() {<br />    global </span><span class="default">$GLOB</span><span class="keyword">; </span><span class="comment">// get reference to global variable using keyword global, at this point local variable $GLOB points to same address as global variable $GLOB<br />    </span><span class="default">$test </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">// declare some local var<br />    </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'GLOB'</span><span class="keyword">] = &amp;</span><span class="default">$test</span><span class="keyword">; </span><span class="comment">// make global variable reference to this local variable using superglobal array, at this point global variable $GLOB points to new memory address, same as local variable $test<br /><br />    </span><span class="default">$GLOB </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// set new value to global variable via earlier set local representation, write to old address<br /><br />    </span><span class="keyword">echo </span><span class="string">"Value of global variable (via local representation set by keyword global): </span><span class="default">$GLOB</span><span class="string"> &lt;hr&gt;"</span><span class="keyword">;<br />    </span><span class="comment">// check global variable via local representation =&gt; 2 (OK, got value that was just written to it, cause old address was used to get value) <br /><br />    </span><span class="keyword">echo </span><span class="string">"Value of global variable (via superglobal array GLOBALS): </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">GLOB</span><span class="keyword">]</span><span class="string"> &lt;hr&gt;"</span><span class="keyword">;<br />    </span><span class="comment">// check global variable using superglobal array =&gt; 1 (got value of local variable $test, new address was used)<br />    <br />    </span><span class="keyword">echo </span><span class="string">"Value ol local variable \$test: </span><span class="default">$test</span><span class="string"> &lt;hr&gt;"</span><span class="keyword">; <br />    </span><span class="comment">// check local variable that was linked with global using superglobal array =&gt; 1 (its value was not affected)<br />    <br />    </span><span class="keyword">global </span><span class="default">$GLOB</span><span class="keyword">; </span><span class="comment">// update reference to global variable using keyword global, at this point we update address that held in local variable $GLOB and it gets same address as local variable $test<br />    </span><span class="keyword">echo </span><span class="string">"Value of global variable (via updated local representation set by keyword global): </span><span class="default">$GLOB</span><span class="string"> &lt;hr&gt;"</span><span class="keyword">;<br />    </span><span class="comment">// check global variable via local representation =&gt; 1 (also value of local variable $test, new address was used) <br /></span><span class="keyword">}<br /><br /></span><span class="default">test_references</span><span class="keyword">();<br />echo </span><span class="string">"Value of global variable outside of function: </span><span class="default">$GLOB</span><span class="string"> &lt;hr&gt;"</span><span class="keyword">;<br /></span><span class="comment">// check global variable outside function =&gt; 1 (equal to value of local variable $test from function, global variable also points to new address)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63500">  <div class="votes">
    <div id="Vu63500">
    <a href="/manual/vote-note.php?id=63500&amp;page=language.variables.scope&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63500">
    <a href="/manual/vote-note.php?id=63500&amp;page=language.variables.scope&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63500" title="60% like this...">
    19
    </div>
  </div>
  <a href="#63500" class="name">
  <strong class="user"><em>larax at o2 dot pl</em></strong></a><a class="genanchor" href="#63500"> &para;</a><div class="date" title="2006-03-22 03:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63500">
<div class="phpcode"><code><span class="html">About more complex situation using global variables..<br /><br />Let's say we have two files:<br />a.php<br /><span class="default">&lt;?php <br />    </span><span class="keyword">function </span><span class="default">a</span><span class="keyword">() { <br />        include(</span><span class="string">"b.php"</span><span class="keyword">); <br />    }<br />    </span><span class="default">a</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />b.php<br /><span class="default">&lt;?php<br />    $b </span><span class="keyword">= </span><span class="string">"something"</span><span class="keyword">;<br />    function </span><span class="default">b</span><span class="keyword">() {<br />        global </span><span class="default">$b</span><span class="keyword">;<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="string">"something new"</span><span class="keyword">;<br />    }<br />    </span><span class="default">b</span><span class="keyword">();<br />    echo </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />You could expect that this script will return "something new" but no, it will return "something". To make it working properly, you must add global keyword in $b definition, in above example it will be:<br /><br />global $b;<br />$b = "something";</span></code></div>
  </div>
 </div>
  <div class="note" id="130487">  <div class="votes">
    <div id="Vu130487">
    <a href="/manual/vote-note.php?id=130487&amp;page=language.variables.scope&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130487">
    <a href="/manual/vote-note.php?id=130487&amp;page=language.variables.scope&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130487" title="no votes...">
    0
    </div>
  </div>
  <a href="#130487" class="name">
  <strong class="user"><em>steveh at brendata dot co dot uk</em></strong></a><a class="genanchor" href="#130487"> &para;</a><div class="date" title="2025-09-18 01:06"><strong>11 days ago</strong></div>
  <div class="text" id="Hcom130487">
<div class="phpcode"><code><span class="html">Note, as of 8.1 $GLOBALS is read only, so the example above writing a value into $GLOBALS no longer works.</span></code></div>
  </div>
 </div>
  <div class="note" id="130412">  <div class="votes">
    <div id="Vu130412">
    <a href="/manual/vote-note.php?id=130412&amp;page=language.variables.scope&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130412">
    <a href="/manual/vote-note.php?id=130412&amp;page=language.variables.scope&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130412" title="50% like this...">
    0
    </div>
  </div>
  <a href="#130412" class="name">
  <strong class="user"><em>aaronw at catalyst dot net dot nz</em></strong></a><a class="genanchor" href="#130412"> &para;</a><div class="date" title="2025-07-10 06:54"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130412">
<div class="phpcode"><code><span class="html">If you're a JavaScript programmer who came to the "Variable scope" manual page trying to figure out how to do a closure in PHP:<br /><br />1. What JavaScript refers to as a "closure", is in PHP just called "inheriting variables from the parent scope"<br />2. In PHP, the term "closure" instead refers to the class that anonymous functions are instances of.<br />3. Unlike in JavaScript, you don't get access to any of the variables of the parent scope (or the global scope) automatically, except for superglobals.<br />4. ... except for arrow functions (in PHP they start with "fn() =&gt; "), which *do* automatically inherit variables from their parent scope.<br />5. For anonymous functions (i.e. functions assigned to a variable), you can add a "use" clause to access specific variables from the parent scope. Here's an example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">outer</span><span class="keyword">() {<br />    </span><span class="default">$outervar </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />    </span><span class="comment">// Each inherited variable must be listed in the "use" clause<br />    </span><span class="default">$anonfn </span><span class="keyword">= function(</span><span class="default">$param1</span><span class="keyword">) use (</span><span class="default">$outervar</span><span class="keyword">) {<br />        return </span><span class="default">$param1 </span><span class="keyword">+ </span><span class="default">$outervar</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$anonfn</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />6. Normal functions (i.e. not assigned to a variable) are globally scoped, so there is no non-global "parent scope" to inherit from.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.variables.scope&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.variables.scope.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.variables.php">Variables</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.variables.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.predefined.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="current">
                            <a href="language.variables.scope.php" title="Variable scope">Variable scope</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.variable.php" title="Variable variables">Variable variables</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.external.php" title="Variables From External Sources">Variables From External Sources</a>
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
