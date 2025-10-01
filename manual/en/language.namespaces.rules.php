<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Name resolution rules - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.namespaces.rules.php">
 <link rel="shorturl" href="https://www.php.net/namespaces.rules">
 <link rel="alternate" href="https://www.php.net/namespaces.rules" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.namespaces.fallback.php">
 <link rel="next" href="https://www.php.net/manual/en/language.namespaces.faq.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.namespaces.rules.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.namespaces.rules.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.namespaces.rules.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.namespaces.rules.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.namespaces.rules.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.namespaces.rules.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.namespaces.rules.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.namespaces.rules.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.namespaces.rules.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.namespaces.rules.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.namespaces.rules.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Name resolution rules" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Name resolution rules - Manual" />
<meta name="twitter:description" content="Name resolution rules" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Name resolution rules - Manual" />
<meta itemprop="description" content="Name resolution rules" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Name resolution rules" />

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
        <a href="language.namespaces.faq.php">
          FAQ &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.namespaces.fallback.php">
          &laquo; Fallback to global space        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.namespaces.php'>Namespaces</a></li>      </ul>
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
            <option value='en/language.namespaces.rules.php' selected="selected">English</option>
            <option value='de/language.namespaces.rules.php'>German</option>
            <option value='es/language.namespaces.rules.php'>Spanish</option>
            <option value='fr/language.namespaces.rules.php'>French</option>
            <option value='it/language.namespaces.rules.php'>Italian</option>
            <option value='ja/language.namespaces.rules.php'>Japanese</option>
            <option value='pt_BR/language.namespaces.rules.php'>Brazilian Portuguese</option>
            <option value='ru/language.namespaces.rules.php'>Russian</option>
            <option value='tr/language.namespaces.rules.php'>Turkish</option>
            <option value='uk/language.namespaces.rules.php'>Ukrainian</option>
            <option value='zh/language.namespaces.rules.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.namespaces.rules" class="sect1">
  <h2 class="title">Name resolution rules</h2>
  
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
  <p class="para">
   For the purposes of these resolution rules, here are some important definitions:
   <dl>
    <strong class="title">Namespace name definitions</strong>
    
     <dt>Unqualified name</dt>
     <dd>
      <p class="para">
       This is an identifier without a namespace separator, such as <code class="literal">Foo</code>
      </p>
     </dd>
    
    
     <dt>Qualified name</dt>
     <dd>
      <p class="para">
       This is an identifier with a namespace separator, such as <code class="literal">Foo\Bar</code>
      </p>
     </dd>
    
    
     <dt>Fully qualified name</dt>
     <dd>
      <p class="para">
       This is an identifier with a namespace separator that begins with a
       namespace separator, such as <code class="literal">\Foo\Bar</code>. The namespace
       <code class="literal">\Foo</code> is also a fully qualified name.
      </p>
     </dd>
    
    
     <dt>Relative name</dt>
     <dd>
      <p class="para">
       This is an identifier starting with <code class="literal">namespace</code>, such as
       <code class="literal">namespace\Foo\Bar</code>.
      </p>
     </dd>
    
   </dl>
  </p>
  <p class="para">
   Names are resolved following these resolution rules:
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      Fully qualified names always resolve to the name without leading namespace separator.
      For instance <code class="literal">\A\B</code> resolves to <code class="literal">A\B</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Relative names always resolve to the name with <code class="literal">namespace</code> replaced by
      the current namespace. If the name occurs in the global namespace, the
      <code class="literal">namespace\</code> prefix is stripped. For example <code class="literal">namespace\A</code>
      inside namespace <code class="literal">X\Y</code> resolves to <code class="literal">X\Y\A</code>. The same name
      inside the global namespace resolves to <code class="literal">A</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      For qualified names the first segment of the name is translated according to the current
      class/namespace import table. For example, if the namespace <code class="literal">A\B\C</code> is
      imported as <code class="literal">C</code>, the name <code class="literal">C\D\E</code> is translated to
      <code class="literal">A\B\C\D\E</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      For qualified names, if no import rule applies, the current namespace is prepended to the
      name. For example, the name <code class="literal">C\D\E</code> inside namespace <code class="literal">A\B</code>,
      resolves to <code class="literal">A\B\C\D\E</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      For unqualified names, the name is translated according to the current import table for the
      respective symbol type. This means that class-like names are translated according to the
      class/namespace import table, function names according to the function import table and
      constants according to the constant import table. For example, after
      <code class="literal">use A\B\C;</code> a usage such as <code class="literal">new C()</code> resolves to the name
      <code class="literal">A\B\C()</code>. Similarly, after <code class="literal">use function A\B\foo;</code> a usage
      such as <code class="literal">foo()</code> resolves to the name <code class="literal">A\B\foo</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      For unqualified names, if no import rule applies and the name refers to a class-like symbol,
      the current namespace is prepended. For example <code class="literal">new C()</code> inside namespace
      <code class="literal">A\B</code> resolves to name <code class="literal">A\B\C</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      For unqualified names, if no import rule applies and the name refers to a function or constant
      and the code is outside the global namespace, the name is resolved at runtime.
      Assuming the code is in namespace <code class="literal">A\B</code>, here is how a call to function
      <code class="literal">foo()</code> is resolved:
     </span>
      <ol type="1">
       <li class="listitem">
        <span class="simpara">
         It looks for a function from the current namespace:
         <code class="literal">A\B\foo()</code>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         It tries to find and call the <em>global</em> function
         <code class="literal">foo()</code>.
        </span>
       </li>
      </ol>
    </li>
   </ol>
  </p>
  <div class="example" id="example-396">
   <p><strong>Example #1 Name resolutions illustrated</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">B\D</span><span style="color: #007700">, </span><span style="color: #0000BB">C\E </span><span style="color: #007700">as </span><span style="color: #0000BB">F</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// function calls<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">();      </span><span style="color: #FF8000">// first tries to call "foo" defined in namespace "A"<br />            // then calls global function "foo"<br /><br /></span><span style="color: #0000BB">\foo</span><span style="color: #007700">();     </span><span style="color: #FF8000">// calls function "foo" defined in global scope<br /><br /></span><span style="color: #0000BB">my\foo</span><span style="color: #007700">();   </span><span style="color: #FF8000">// calls function "foo" defined in namespace "A\my"<br /><br /></span><span style="color: #0000BB">F</span><span style="color: #007700">();        </span><span style="color: #FF8000">// first tries to call "F" defined in namespace "A"<br />            // then calls global function "F"<br /><br />// class references<br /><br /></span><span style="color: #007700">new </span><span style="color: #0000BB">B</span><span style="color: #007700">();    </span><span style="color: #FF8000">// creates object of class "B" defined in namespace "A"<br />            // if not found, it tries to autoload class "A\B"<br /><br /></span><span style="color: #007700">new </span><span style="color: #0000BB">D</span><span style="color: #007700">();    </span><span style="color: #FF8000">// using import rules, creates object of class "D" defined in namespace "B"<br />            // if not found, it tries to autoload class "B\D"<br /><br /></span><span style="color: #007700">new </span><span style="color: #0000BB">F</span><span style="color: #007700">();    </span><span style="color: #FF8000">// using import rules, creates object of class "E" defined in namespace "C"<br />            // if not found, it tries to autoload class "C\E"<br /><br /></span><span style="color: #007700">new </span><span style="color: #0000BB">\B</span><span style="color: #007700">();   </span><span style="color: #FF8000">// creates object of class "B" defined in global scope<br />            // if not found, it tries to autoload class "B"<br /><br /></span><span style="color: #007700">new </span><span style="color: #0000BB">\D</span><span style="color: #007700">();   </span><span style="color: #FF8000">// creates object of class "D" defined in global scope<br />            // if not found, it tries to autoload class "D"<br /><br /></span><span style="color: #007700">new </span><span style="color: #0000BB">\F</span><span style="color: #007700">();   </span><span style="color: #FF8000">// creates object of class "F" defined in global scope<br />            // if not found, it tries to autoload class "F"<br /><br />// static methods/namespace functions from another namespace<br /><br /></span><span style="color: #0000BB">B\foo</span><span style="color: #007700">();    </span><span style="color: #FF8000">// calls function "foo" from namespace "A\B"<br /><br /></span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();   </span><span style="color: #FF8000">// calls method "foo" of class "B" defined in namespace "A"<br />            // if class "A\B" not found, it tries to autoload class "A\B"<br /><br /></span><span style="color: #0000BB">D</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();   </span><span style="color: #FF8000">// using import rules, calls method "foo" of class "D" defined in namespace "B"<br />            // if class "B\D" not found, it tries to autoload class "B\D"<br /><br /></span><span style="color: #0000BB">\B\foo</span><span style="color: #007700">();   </span><span style="color: #FF8000">// calls function "foo" from namespace "B"<br /><br /></span><span style="color: #0000BB">\B</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();  </span><span style="color: #FF8000">// calls method "foo" of class "B" from global scope<br />            // if class "B" not found, it tries to autoload class "B"<br /><br />// static methods/namespace functions of current namespace<br /><br /></span><span style="color: #0000BB">A\B</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();   </span><span style="color: #FF8000">// calls method "foo" of class "B" from namespace "A\A"<br />              // if class "A\A\B" not found, it tries to autoload class "A\A\B"<br /><br /></span><span style="color: #0000BB">\A\B</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();  </span><span style="color: #FF8000">// calls method "foo" of class "B" from namespace "A"<br />              // if class "A\B" not found, it tries to autoload class "A\B"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/namespaces.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.namespaces.rules%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.namespaces.rules&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.rules.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100645">  <div class="votes">
    <div id="Vu100645">
    <a href="/manual/vote-note.php?id=100645&amp;page=language.namespaces.rules&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100645">
    <a href="/manual/vote-note.php?id=100645&amp;page=language.namespaces.rules&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100645" title="78% like this...">
    37
    </div>
  </div>
  <a href="#100645" class="name">
  <strong class="user"><em>kdimi</em></strong></a><a class="genanchor" href="#100645"> &para;</a><div class="date" title="2010-10-27 06:35"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100645">
<div class="phpcode"><code><span class="html">If you like to declare an __autoload function within a namespace or class, use the spl_autoload_register() function to register it and it will work fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="92608">  <div class="votes">
    <div id="Vu92608">
    <a href="/manual/vote-note.php?id=92608&amp;page=language.namespaces.rules&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92608">
    <a href="/manual/vote-note.php?id=92608&amp;page=language.namespaces.rules&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92608" title="78% like this...">
    33
    </div>
  </div>
  <a href="#92608" class="name">
  <strong class="user"><em>rangel</em></strong></a><a class="genanchor" href="#92608"> &para;</a><div class="date" title="2009-07-31 12:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92608">
<div class="phpcode"><code><span class="html">The term "autoload" mentioned here shall not be confused with __autoload function to autoload objects. Regarding the __autoload and namespaces' resolution I'd like to share the following experience:<br /><br />-&gt;Say you have the following directory structure:<br /><br />- root<br />      | - loader.php <br />      | - ns<br />             | - foo.php<br /><br />-&gt;foo.php<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">ns</span><span class="keyword">;<br />class </span><span class="default">foo<br /></span><span class="keyword">{<br />    public </span><span class="default">$say</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">say </span><span class="keyword">= </span><span class="string">"bar"</span><span class="keyword">;<br />    }<br />    <br />}<br /></span><span class="default">?&gt;<br /></span><br />-&gt; loader.php<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//GLOBAL SPACE &lt;--<br /></span><span class="keyword">function </span><span class="default">__autoload</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">)<br />{<br />    require_once </span><span class="default">$c </span><span class="keyword">. </span><span class="string">".php"</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">foo </span><span class="keyword">extends </span><span class="default">ns\foo </span><span class="comment">// ns\foo is loaded here<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">();<br />        echo </span><span class="string">"&lt;br /&gt;foo" </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">ns\foo</span><span class="keyword">(); </span><span class="comment">// ns\foo also loads ns/foo.php just fine here.<br /></span><span class="keyword">echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">;   </span><span class="comment">// prints bar as expected.<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">;  </span><span class="comment">// prints foobar just fine.<br /></span><span class="default">?&gt;<br /></span><br />If you keep your directory/file matching namespace/class consistence the object __autoload works fine.<br />But... if you try to give loader.php a namespace you'll obviously get fatal errors. <br />My sample is just 1 level dir, but I've tested with a very complex and deeper structure. Hope anybody finds this useful.<br /><br />Cheers!</span></code></div>
  </div>
 </div>
  <div class="note" id="100542">  <div class="votes">
    <div id="Vu100542">
    <a href="/manual/vote-note.php?id=100542&amp;page=language.namespaces.rules&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100542">
    <a href="/manual/vote-note.php?id=100542&amp;page=language.namespaces.rules&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100542" title="63% like this...">
    5
    </div>
  </div>
  <a href="#100542" class="name">
  <strong class="user"><em>safakozpinar at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#100542"> &para;</a><div class="date" title="2010-10-22 01:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100542">
<div class="phpcode"><code><span class="html">As working with namespaces and using (custom or basic) autoload structure; magic function __autoload must be defined in global scope, not in a namespace, also not in another function or method.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Glue </span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Define your custom structure and algorithms<br />     * for autoloading in this class.<br />     */<br />    </span><span class="keyword">class </span><span class="default">Import<br />    </span><span class="keyword">{<br />        public static function </span><span class="default">load </span><span class="keyword">(</span><span class="default">$classname</span><span class="keyword">)<br />        {<br />            echo </span><span class="string">'Autoloading class '</span><span class="keyword">.</span><span class="default">$classname</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />            require_once </span><span class="default">$classname</span><span class="keyword">.</span><span class="string">'.php'</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br /></span><span class="comment">/**<br /> * Define function __autoload in global namespace.<br /> */<br /></span><span class="keyword">namespace {<br />    <br />    function </span><span class="default">__autoload </span><span class="keyword">(</span><span class="default">$classname</span><span class="keyword">)<br />    {<br />        </span><span class="default">\Glue\Import</span><span class="keyword">::</span><span class="default">load</span><span class="keyword">(</span><span class="default">$classname</span><span class="keyword">);<br />    }<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114187">  <div class="votes">
    <div id="Vu114187">
    <a href="/manual/vote-note.php?id=114187&amp;page=language.namespaces.rules&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114187">
    <a href="/manual/vote-note.php?id=114187&amp;page=language.namespaces.rules&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114187" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#114187" class="name">
  <strong class="user"><em>Kavoir.com</em></strong></a><a class="genanchor" href="#114187"> &para;</a><div class="date" title="2014-01-22 10:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114187">
<div class="phpcode"><code><span class="html">For point 4, "In example, if the namespace A\B\C is imported as C" should be "In example, if the class A\B\C is imported as C".</span></code></div>
  </div>
 </div>
  <div class="note" id="116370">  <div class="votes">
    <div id="Vu116370">
    <a href="/manual/vote-note.php?id=116370&amp;page=language.namespaces.rules&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116370">
    <a href="/manual/vote-note.php?id=116370&amp;page=language.namespaces.rules&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116370" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#116370" class="name">
  <strong class="user"><em>llmll</em></strong></a><a class="genanchor" href="#116370"> &para;</a><div class="date" title="2014-12-21 01:05"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116370">
<div class="phpcode"><code><span class="html">The mentioned filesystem analogy fails at an important point:<br /><br />Namespace resolution *only* works at declaration time. The compiler fixates all namespace/class references as absolute paths, like creating absolute symlinks.<br /><br />You can't expect relative symlinks, which should be evaluated during access -&gt; during PHP runtime.<br /><br />In other words, namespaces are evaluated like __CLASS__ or self:: at parse-time. What's *not* happening, is the pendant for late static binding like static:: which resolves to the current class at runtime.<br /><br />So you can't do the following:<br /><br />namespace Alpha;<br />class Helper {<br />    public static $Value = "ALPHA";<br />}<br />class Base {<br />    public static function Write() { <br />        echo Helper::$Value;<br />    }<br />}<br /><br />namespace Beta;<br />class Helper extends \Alpha\Helper {<br />    public static $Value = 'BETA';<br />}    <br />class Base extends \Alpha\Base {}    <br /><br />\Beta\Base::Write(); // should write "BETA" as this is the executing namespace context at runtime.<br /><br />If you copy the write() function into \Beta\Base it works as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="92607">  <div class="votes">
    <div id="Vu92607">
    <a href="/manual/vote-note.php?id=92607&amp;page=language.namespaces.rules&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92607">
    <a href="/manual/vote-note.php?id=92607&amp;page=language.namespaces.rules&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92607" title="38% like this...">
    -5
    </div>
  </div>
  <a href="#92607" class="name">
  <strong class="user"><em>rangel</em></strong></a><a class="genanchor" href="#92607"> &para;</a><div class="date" title="2009-07-31 12:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92607">
<div class="phpcode"><code><span class="html">The term "autoload" mentioned here shall not be confused with __autoload function to autoload objects. Regarding the __autoload and namespaces' resolution I'd like to share the following experience:<br /><br />-&gt;Say you have the following directory structure:<br /><br />- root<br />      | - loader.php <br />      | - ns<br />             | - foo.php<br /><br />-&gt;foo.php<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">ns</span><span class="keyword">;<br />class </span><span class="default">foo<br /></span><span class="keyword">{<br />    public </span><span class="default">$say</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">say </span><span class="keyword">= </span><span class="string">"bar"</span><span class="keyword">;<br />    }<br />    <br />}<br /></span><span class="default">?&gt;<br /></span><br />-&gt; loader.php<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//GLOBAL SPACE &lt;--<br /></span><span class="keyword">function </span><span class="default">__autoload</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">)<br />{<br />    require_once </span><span class="default">$c </span><span class="keyword">. </span><span class="string">".php"</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">foo </span><span class="keyword">extends </span><span class="default">ns\foo </span><span class="comment">// ns\foo is loaded here<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">();<br />        echo </span><span class="string">"&lt;br /&gt;foo" </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">ns\foo</span><span class="keyword">(); </span><span class="comment">// ns\foo also loads ns/foo.php just fine here.<br /></span><span class="keyword">echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">;   </span><span class="comment">// prints bar as expected.<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">;  </span><span class="comment">// prints foobar just fine.<br /></span><span class="default">?&gt;<br /></span><br />If you keep your directory/file matching namespace/class consistence the object __autoload works fine.<br />But... if you try to give loader.php a namespace you'll obviously get fatal errors. <br />My sample is just 1 level dir, but I've tested with a very complex and deeper structure. Hope anybody finds this useful.<br /><br />Cheers!</span></code></div>
  </div>
 </div>
  <div class="note" id="118833">  <div class="votes">
    <div id="Vu118833">
    <a href="/manual/vote-note.php?id=118833&amp;page=language.namespaces.rules&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118833">
    <a href="/manual/vote-note.php?id=118833&amp;page=language.namespaces.rules&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118833" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#118833" class="name">
  <strong class="user"><em>anrdaemon at freemail dot ru</em></strong></a><a class="genanchor" href="#118833"> &para;</a><div class="date" title="2016-02-12 10:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118833">
<div class="phpcode"><code><span class="html">Namespaces may be case-insensitive, but autoloaders most often do.<br />Do yourself a service, keep your cases consistent with file names, and don't overcomplicate autoloaders beyond necessity.<br />Something like this should suffice for most times:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">org\example</span><span class="keyword">;<br /><br />function </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">)<br />{<br />  </span><span class="default">$file </span><span class="keyword">= new </span><span class="default">\SplFileInfo</span><span class="keyword">(</span><span class="default">__DIR__ </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="string">"</span><span class="default">$className</span><span class="string">.php"</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">), </span><span class="default">11</span><span class="keyword">));<br />  </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getRealPath</span><span class="keyword">();<br />  if(empty(</span><span class="default">$path</span><span class="keyword">))<br />  {<br />    return </span><span class="default">false</span><span class="keyword">;<br />  }<br />  else<br />  {<br />    return include_once </span><span class="default">$path</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">\spl_autoload_register</span><span class="keyword">(</span><span class="string">'\org\example\spl_autoload'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.namespaces.rules&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.rules.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.namespaces.php">Namespaces</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.namespaces.rationale.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definition.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nested.php" title="Sub-&#8203;namespaces">Sub-&#8203;namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definitionmultiple.php" title="Defining multiple namespaces in the same file">Defining multiple namespaces in the same file</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.dynamic.php" title="Namespaces and dynamic language features">Namespaces and dynamic language features</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nsconstants.php" title="namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;">namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.importing.php" title="Aliasing and Importing">Aliasing and Importing</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.global.php" title="Global space">Global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.fallback.php" title="Fallback to global space">Fallback to global space</a>
                        </li>
                                                <li class="current">
                            <a href="language.namespaces.rules.php" title="Name resolution rules">Name resolution rules</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.faq.php" title="FAQ">FAQ</a>
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
