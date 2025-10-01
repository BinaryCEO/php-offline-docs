<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: interface_exists - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.interface-exists.php">
 <link rel="shorturl" href="https://www.php.net/interface-exists">
 <link rel="alternate" href="https://www.php.net/interface-exists" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.get-parent-class.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-a.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.interface-exists.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.interface-exists.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.interface-exists.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.interface-exists.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.interface-exists.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.interface-exists.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.interface-exists.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.interface-exists.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.interface-exists.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.interface-exists.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.interface-exists.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks if the interface has been defined" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: interface_exists - Manual" />
<meta name="twitter:description" content="Checks if the interface has been defined" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: interface_exists - Manual" />
<meta itemprop="description" content="Checks if the interface has been defined" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks if the interface has been defined" />

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
        <a href="function.is-a.php">
          is_a &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.get-parent-class.php">
          &laquo; get_parent_class        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.classobj.php'>Classes/Objects</a></li>      <li><a href='ref.classobj.php'>Classes/Object Functions</a></li>      </ul>
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
            <option value='en/function.interface-exists.php' selected="selected">English</option>
            <option value='de/function.interface-exists.php'>German</option>
            <option value='es/function.interface-exists.php'>Spanish</option>
            <option value='fr/function.interface-exists.php'>French</option>
            <option value='it/function.interface-exists.php'>Italian</option>
            <option value='ja/function.interface-exists.php'>Japanese</option>
            <option value='pt_BR/function.interface-exists.php'>Brazilian Portuguese</option>
            <option value='ru/function.interface-exists.php'>Russian</option>
            <option value='tr/function.interface-exists.php'>Turkish</option>
            <option value='uk/function.interface-exists.php'>Ukrainian</option>
            <option value='zh/function.interface-exists.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.interface-exists" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">interface_exists</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.0.2, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">interface_exists</span> &mdash; <span class="dc-title">Checks if the interface has been defined</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.interface-exists-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>interface_exists</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$interface</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$autoload</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Checks if the given interface has been defined.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.interface-exists-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">interface</code></dt>
     <dd>
      <p class="para">
       The interface name
      </p>
     </dd>
    
    
     <dt><code class="parameter">autoload</code></dt>
     <dd>
      <p class="para">
       Whether to <a href="language.oop5.autoload.php" class="link">autoload</a>
       if not already loaded.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.interface-exists-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the interface given by 
   <code class="parameter">interface</code> has been defined, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.interface-exists-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5354">
    <p><strong>Example #1 <span class="function"><strong>interface_exists()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Check the interface exists before trying to use it<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">interface_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'MyInterface'</span><span style="color: #007700">)) {<br />    class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">implements </span><span style="color: #0000BB">MyInterface<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #FF8000">// Methods<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.interface-exists-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-declared-interfaces.php" class="function" rel="rdfs-seeAlso">get_declared_interfaces()</a> - Returns an array of all declared interfaces</span></li>
    <li><span class="function"><a href="function.class-implements.php" class="function" rel="rdfs-seeAlso">class_implements()</a> - Return the interfaces which are implemented by the given class or interface</span></li>
    <li><span class="function"><a href="function.class-exists.php" class="function" rel="rdfs-seeAlso">class_exists()</a> - Checks if the class has been defined</span></li>
    <li><span class="function"><a href="function.enum-exists.php" class="function" rel="rdfs-seeAlso">enum_exists()</a> - Checks if the enum has been defined</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/functions/interface-exists.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.interface-exists%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.interface-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.interface-exists.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118391">  <div class="votes">
    <div id="Vu118391">
    <a href="/manual/vote-note.php?id=118391&amp;page=function.interface-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118391">
    <a href="/manual/vote-note.php?id=118391&amp;page=function.interface-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118391" title="71% like this...">
    6
    </div>
  </div>
  <a href="#118391" class="name">
  <strong class="user"><em>CoR</em></strong></a><a class="genanchor" href="#118391"> &para;</a><div class="date" title="2015-11-28 02:30"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118391">
<div class="phpcode"><code><span class="html">Class and Interface share SAME namespace!<br /><br />class k{}<br /><br />interface k {}    // Fatal error: Cannot redeclare class k</span></code></div>
  </div>
 </div>
  <div class="note" id="106314">  <div class="votes">
    <div id="Vu106314">
    <a href="/manual/vote-note.php?id=106314&amp;page=function.interface-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106314">
    <a href="/manual/vote-note.php?id=106314&amp;page=function.interface-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106314" title="83% like this...">
    4
    </div>
  </div>
  <a href="#106314" class="name">
  <strong class="user"><em>nils dot rocine at gmail dot com</em></strong></a><a class="genanchor" href="#106314"> &para;</a><div class="date" title="2011-10-26 06:35"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106314">
<div class="phpcode"><code><span class="html">A little note on namespaces that may be obvious to some, but was not obvious to me.
<br />
<br />Although you can make the below statement when the statement is in the same namespace as the interface/class declaration MyInterface... 
<br /><span class="default">&lt;?php
<br />$foo </span><span class="keyword">instanceof </span><span class="default">MyInterface
<br />?&gt;
<br /></span>
<br />Making use of the interface_exists, or class_exists functions, you must enter the full namespaced interface name like so (even if the function call is from the same namespace.)
<br /><span class="default">&lt;?php
<br />interface_exists</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\MyInterface'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46809">  <div class="votes">
    <div id="Vu46809">
    <a href="/manual/vote-note.php?id=46809&amp;page=function.interface-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46809">
    <a href="/manual/vote-note.php?id=46809&amp;page=function.interface-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46809" title="63% like this...">
    3
    </div>
  </div>
  <a href="#46809" class="name">
  <strong class="user"><em>andrey at php dot net</em></strong></a><a class="genanchor" href="#46809"> &para;</a><div class="date" title="2004-10-24 04:40"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46809">
<div class="phpcode"><code><span class="html">As far as I remember interface_exists() was added in 5.0.2 . In 5.0.0 and 5.0.1 class_exists() used to return TRUE when asked for a existing interface. Starting 5.0.2 class_exists() doesn't do that anymore.</span></code></div>
  </div>
 </div>
  <div class="note" id="110210">  <div class="votes">
    <div id="Vu110210">
    <a href="/manual/vote-note.php?id=110210&amp;page=function.interface-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110210">
    <a href="/manual/vote-note.php?id=110210&amp;page=function.interface-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110210" title="60% like this...">
    1
    </div>
  </div>
  <a href="#110210" class="name">
  <strong class="user"><em>maxim at inbox dot ru</em></strong></a><a class="genanchor" href="#110210"> &para;</a><div class="date" title="2012-10-01 10:40"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110210">
<div class="phpcode"><code><span class="html">If you want to check for included interface and you already register spl autoloader - it will crash. Becassue autoloader trying to load `string` and he doesnt matter is it class or not.<br />Iv found several ways :<br />1 - unregister AL - -&gt; check for Ifaces - -&gt; register Autoloader<br /><br />2 - $ifaces = array_flip(get_declared_interfaces()); <br /> if($ifaces["MyIface"]) // empty // isset .<br /><br />Interfaces are not bad, you can build correct geomentry of system , with validation by funcs / vars / const .<br />Also they are good to storage variables <span class="default">&lt;?php<br /> ROOT</span><span class="keyword">::</span><span class="default">THEMES </span><span class="keyword">; </span><span class="default">ROOT</span><span class="keyword">::</span><span class="default">LOC </span><span class="keyword">; </span><span class="default">?&gt;</span> . Much faster then Define, but you cant put algorithms inside, only complite strings / __file__ / etc.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.interface-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.interface-exists.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.classobj.php">Classes/Object Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-alias.php" title="class_&#8203;alias">class_&#8203;alias</a>
                        </li>
                                                <li class="">
                            <a href="function.class-exists.php" title="class_&#8203;exists">class_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.enum-exists.php" title="enum_&#8203;exists">enum_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.get-called-class.php" title="get_&#8203;called_&#8203;class">get_&#8203;called_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class.php" title="get_&#8203;class">get_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-methods.php" title="get_&#8203;class_&#8203;methods">get_&#8203;class_&#8203;methods</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-vars.php" title="get_&#8203;class_&#8203;vars">get_&#8203;class_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-classes.php" title="get_&#8203;declared_&#8203;classes">get_&#8203;declared_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-interfaces.php" title="get_&#8203;declared_&#8203;interfaces">get_&#8203;declared_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-traits.php" title="get_&#8203;declared_&#8203;traits">get_&#8203;declared_&#8203;traits</a>
                        </li>
                                                <li class="">
                            <a href="function.get-mangled-object-vars.php" title="get_&#8203;mangled_&#8203;object_&#8203;vars">get_&#8203;mangled_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-object-vars.php" title="get_&#8203;object_&#8203;vars">get_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-parent-class.php" title="get_&#8203;parent_&#8203;class">get_&#8203;parent_&#8203;class</a>
                        </li>
                                                <li class="current">
                            <a href="function.interface-exists.php" title="interface_&#8203;exists">interface_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.is-a.php" title="is_&#8203;a">is_&#8203;a</a>
                        </li>
                                                <li class="">
                            <a href="function.is-subclass-of.php" title="is_&#8203;subclass_&#8203;of">is_&#8203;subclass_&#8203;of</a>
                        </li>
                                                <li class="">
                            <a href="function.method-exists.php" title="method_&#8203;exists">method_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.property-exists.php" title="property_&#8203;exists">property_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.trait-exists.php" title="trait_&#8203;exists">trait_&#8203;exists</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.autoload.php" title="_&#8203;_&#8203;autoload">_&#8203;_&#8203;autoload</a>
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
