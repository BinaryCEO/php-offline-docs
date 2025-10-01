<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: class_alias - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.class-alias.php">
 <link rel="shorturl" href="https://www.php.net/class-alias">
 <link rel="alternate" href="https://www.php.net/class-alias" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.autoload.php">
 <link rel="next" href="https://www.php.net/manual/en/function.class-exists.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.class-alias.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.class-alias.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.class-alias.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.class-alias.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.class-alias.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.class-alias.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.class-alias.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.class-alias.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.class-alias.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.class-alias.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.class-alias.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates an alias for a class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: class_alias - Manual" />
<meta name="twitter:description" content="Creates an alias for a class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: class_alias - Manual" />
<meta itemprop="description" content="Creates an alias for a class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates an alias for a class" />

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
        <a href="function.class-exists.php">
          class_exists &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.autoload.php">
          &laquo; __autoload        </a>
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
            <option value='en/function.class-alias.php' selected="selected">English</option>
            <option value='de/function.class-alias.php'>German</option>
            <option value='es/function.class-alias.php'>Spanish</option>
            <option value='fr/function.class-alias.php'>French</option>
            <option value='it/function.class-alias.php'>Italian</option>
            <option value='ja/function.class-alias.php'>Japanese</option>
            <option value='pt_BR/function.class-alias.php'>Brazilian Portuguese</option>
            <option value='ru/function.class-alias.php'>Russian</option>
            <option value='tr/function.class-alias.php'>Turkish</option>
            <option value='uk/function.class-alias.php'>Ukrainian</option>
            <option value='zh/function.class-alias.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.class-alias" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">class_alias</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">class_alias</span> &mdash; <span class="dc-title">Creates an alias for a class</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.class-alias-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>class_alias</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$alias</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$autoload</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Creates an alias named <code class="parameter">alias</code>
   based on the user defined class <code class="parameter">class</code>.
   The aliased class is exactly the same as the original class.
  </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    As of PHP 8.3.0, <span class="function"><strong>class_alias()</strong></span> also supports
    creating an alias of a PHP internal class.
   </span>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.class-alias-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">class</code></dt>
     <dd>
      <p class="para">
       The original class.
      </p>
     </dd>
    
    
     <dt><code class="parameter">alias</code></dt>
     <dd>
      <p class="para">
       The alias name for the class.
      </p>
     </dd>
    
    
     <dt><code class="parameter">autoload</code></dt>
     <dd>
      <p class="para">
       Whether to <a href="language.oop5.autoload.php" class="link">autoload</a>
       if the original class is not found.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.class-alias-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.class-alias-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.3.0</td>
      <td>
       <span class="function"><strong>class_alias()</strong></span> now supports creating an alias of an internal class.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.class-alias-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5338">
    <p><strong>Example #1 <span class="function"><strong>class_alias()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{ }<br /><br /></span><span style="color: #0000BB">class_alias</span><span style="color: #007700">(</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Bar'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= new </span><span style="color: #0000BB">Bar</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// the objects are the same<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">== </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$a </span><span style="color: #007700">=== </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// the classes are the same<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">Foo</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">Bar</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$b </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">Foo</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$b </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">Bar</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(true)
bool(false)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.class-alias-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Class names are case-insensitive in PHP, and this is reflected in this
    function. Aliases created by <span class="function"><strong>class_alias()</strong></span> are declared
    in lowercase. This means that for a class
    <code class="literal">MyClass</code>, the <code class="code">class_alias(&#039;MyClass&#039;, &#039;MyClassAlias&#039;)</code>
    call will declare a new class alias named <code class="literal">myclassalias</code>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.class-alias-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-parent-class.php" class="function" rel="rdfs-seeAlso">get_parent_class()</a> - Retrieves the parent class name for object or class</span></li>
    <li><span class="function"><a href="function.is-subclass-of.php" class="function" rel="rdfs-seeAlso">is_subclass_of()</a> - Checks if the object has this class as one of its parents or implements it</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/functions/class-alias.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.class-alias%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.class-alias&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-alias.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111585">  <div class="votes">
    <div id="Vu111585">
    <a href="/manual/vote-note.php?id=111585&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111585">
    <a href="/manual/vote-note.php?id=111585&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111585" title="73% like this...">
    31
    </div>
  </div>
  <a href="#111585" class="name">
  <strong class="user"><em>mweierophinney at gmail dot com</em></strong></a><a class="genanchor" href="#111585"> &para;</a><div class="date" title="2013-03-06 02:05"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111585">
<div class="phpcode"><code><span class="html">class_alias() gives you the ability to do conditional imports.<br /><br />Whereas the following will not work:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Component</span><span class="keyword">;<br /><br />if (</span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">, </span><span class="string">'5.4.0'</span><span class="keyword">, </span><span class="string">'gte'</span><span class="keyword">)) {<br />    use </span><span class="default">My\ArrayObject</span><span class="keyword">;<br />} else {<br />    use </span><span class="default">ArrayObject</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">Container </span><span class="keyword">extends </span><span class="default">ArrayObject<br /></span><span class="keyword">{<br />}<br /></span><span class="default">?&gt;<br /></span><br />the following, using class_alias, will:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Component</span><span class="keyword">;<br /><br />if (</span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">, </span><span class="string">'5.4.0'</span><span class="keyword">, </span><span class="string">'lt'</span><span class="keyword">)) {<br />    </span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'My\ArrayObject'</span><span class="keyword">, </span><span class="string">'Component\ArrayObject'</span><span class="keyword">);<br />} else {<br />    </span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'ArrayObject'</span><span class="keyword">, </span><span class="string">'Component\ArrayObject'</span><span class="keyword">);<br />}<br /><br />class </span><span class="default">Container </span><span class="keyword">extends </span><span class="default">ArrayObject<br /></span><span class="keyword">{<br />}<br /></span><span class="default">?&gt;<br /></span><br />The semantics are slightly different (I'm now indicating that Container extends from an ArrayObject implementation in the same namespace), but the overall idea is the same: conditional imports.</span></code></div>
  </div>
 </div>
  <div class="note" id="119931">  <div class="votes">
    <div id="Vu119931">
    <a href="/manual/vote-note.php?id=119931&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119931">
    <a href="/manual/vote-note.php?id=119931&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119931" title="86% like this...">
    11
    </div>
  </div>
  <a href="#119931" class="name">
  <strong class="user"><em>robsonvnasc at gmail dot com</em></strong></a><a class="genanchor" href="#119931"> &para;</a><div class="date" title="2016-09-22 03:30"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119931">
<div class="phpcode"><code><span class="html">It also works with Traits!<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">trait </span><span class="default">Foo </span><span class="keyword">{}<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">"Foo"</span><span class="keyword">,</span><span class="string">"Bar"</span><span class="keyword">);<br />echo </span><span class="default">trait_exists</span><span class="keyword">(</span><span class="string">"Bar"</span><span class="keyword">) ? </span><span class="string">'yes' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span>//yes</span></code></div>
  </div>
 </div>
  <div class="note" id="101629">  <div class="votes">
    <div id="Vu101629">
    <a href="/manual/vote-note.php?id=101629&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101629">
    <a href="/manual/vote-note.php?id=101629&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101629" title="77% like this...">
    17
    </div>
  </div>
  <a href="#101629" class="name">
  <strong class="user"><em>nicolas dot grekas+php at gmail dot com</em></strong></a><a class="genanchor" href="#101629"> &para;</a><div class="date" title="2010-12-30 02:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101629">
<div class="phpcode"><code><span class="html">class_alias also works for interfaces!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">foo </span><span class="keyword">{}<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">);<br />echo </span><span class="default">interface_exists</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">) ? </span><span class="string">'yes!' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">; </span><span class="comment">// prints yes!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105403">  <div class="votes">
    <div id="Vu105403">
    <a href="/manual/vote-note.php?id=105403&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105403">
    <a href="/manual/vote-note.php?id=105403&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105403" title="75% like this...">
    17
    </div>
  </div>
  <a href="#105403" class="name">
  <strong class="user"><em>programmer-comfreek at hotmail dot com</em></strong></a><a class="genanchor" href="#105403"> &para;</a><div class="date" title="2011-08-15 09:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105403">
<div class="phpcode"><code><span class="html">If you defined the class 'original' in a namespace, you will have to specify the namespace(s), too:<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">ns1\ns2\ns3</span><span class="keyword">;<br /><br />class </span><span class="default">A </span><span class="keyword">{}<br /><br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'ns1\ns2\ns3\A'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">);<br /></span><span class="comment">/* or if you want B to exist in ns1\ns2\ns3 */<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'ns1\ns2\ns3\A'</span><span class="keyword">, </span><span class="string">'ns1\ns2\ns3\B'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124962">  <div class="votes">
    <div id="Vu124962">
    <a href="/manual/vote-note.php?id=124962&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124962">
    <a href="/manual/vote-note.php?id=124962&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124962" title="75% like this...">
    2
    </div>
  </div>
  <a href="#124962" class="name">
  <strong class="user"><em>elliseproduction at gmail dot com</em></strong></a><a class="genanchor" href="#124962"> &para;</a><div class="date" title="2020-04-29 12:09"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124962">
<div class="phpcode"><code><span class="html">You can add a alias inside a class :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">foo</span><span class="keyword">{<br /><br />    function </span><span class="default">__construct</span><span class="keyword">(){<br />        <br />        echo(</span><span class="string">'yes!'</span><span class="keyword">);<br />    <br />    }<br />}<br /><br />class </span><span class="default">bar </span><span class="keyword">{<br /><br />    function </span><span class="default">__construct</span><span class="keyword">(){<br />        <br />        </span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'fooAlias'</span><span class="keyword">);<br />    <br />    }<br />    <br />    function </span><span class="default">test</span><span class="keyword">(){<br />        <br />        new </span><span class="default">fooAlias</span><span class="keyword">;<br />        <br />    }<br /><br />}<br /><br /></span><span class="default">$bar</span><span class="keyword">=new </span><span class="default">bar</span><span class="keyword">;<br /><br /></span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">(); </span><span class="comment">// yes!</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117983">  <div class="votes">
    <div id="Vu117983">
    <a href="/manual/vote-note.php?id=117983&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117983">
    <a href="/manual/vote-note.php?id=117983&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117983" title="66% like this...">
    7
    </div>
  </div>
  <a href="#117983" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#117983"> &para;</a><div class="date" title="2015-09-14 07:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117983">
<div class="phpcode"><code><span class="html">class_alias() creates aliases only for user defined classes, not for classes supplied by PHP (PHP will show the warning "First argument of class_alias() must be a name of user defined class"). To create aliases for every kind of classes, use namespaces:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Does not work<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">"ZipArchive"</span><span class="keyword">, </span><span class="string">"myZip"</span><span class="keyword">);<br /><br /></span><span class="comment">// Creates class alias "myZip" of class "ZipArchive"<br /></span><span class="keyword">use </span><span class="default">\ZipArchive </span><span class="keyword">as </span><span class="default">myZip</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125410">  <div class="votes">
    <div id="Vu125410">
    <a href="/manual/vote-note.php?id=125410&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125410">
    <a href="/manual/vote-note.php?id=125410&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125410" title="66% like this...">
    1
    </div>
  </div>
  <a href="#125410" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#125410"> &para;</a><div class="date" title="2020-10-03 07:30"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125410">
<div class="phpcode"><code><span class="html">Note: this function set alias for user classes, you can't use something like this<br /><span class="default">&lt;?php<br />class_alias</span><span class="keyword">(</span><span class="string">'ArrayObject'</span><span class="keyword">, </span><span class="string">'ArrObj'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122825">  <div class="votes">
    <div id="Vu122825">
    <a href="/manual/vote-note.php?id=122825&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122825">
    <a href="/manual/vote-note.php?id=122825&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122825" title="66% like this...">
    1
    </div>
  </div>
  <a href="#122825" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#122825"> &para;</a><div class="date" title="2018-06-12 01:55"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122825">
<div class="phpcode"><code><span class="html">The alias really is an alias for the existing class. It's not a new class of any kind - whether by inheritance or otherwise; it doesn't just look and behave exactly like the existing class; it really is the same class.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">foo<br /></span><span class="keyword">{<br />    public static </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />}<br /><br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">);<br /><br /></span><span class="default">bar</span><span class="keyword">::</span><span class="default">$count</span><span class="keyword">++;<br /><br />echo </span><span class="default">foo</span><span class="keyword">::</span><span class="default">$count</span><span class="keyword">; </span><span class="comment">// Output: 1<br /><br /></span><span class="keyword">echo </span><span class="default">get_class</span><span class="keyword">(new </span><span class="default">Bar</span><span class="keyword">); </span><span class="comment">// Output: foo<br /></span><span class="default">?&gt;<br /></span>Note in the last line there that aliases are just as case-insensitive as "genuine" class names.</span></code></div>
  </div>
 </div>
  <div class="note" id="111486">  <div class="votes">
    <div id="Vu111486">
    <a href="/manual/vote-note.php?id=111486&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111486">
    <a href="/manual/vote-note.php?id=111486&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111486" title="55% like this...">
    2
    </div>
  </div>
  <a href="#111486" class="name">
  <strong class="user"><em>sergey dot karavay at gmail dot com</em></strong></a><a class="genanchor" href="#111486"> &para;</a><div class="date" title="2013-02-25 11:08"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111486">
<div class="phpcode"><code><span class="html">At first, you might wonder that:
<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{}; </span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />is equivalent to:
<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{}; class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{}; </span><span class="default">?&gt;
<br /></span>
<br />class_alias is NOT equivalent to class extending! Private methods/properties are unseen in child classes, but in alias classes they are.</span></code></div>
  </div>
 </div>
  <div class="note" id="105675">  <div class="votes">
    <div id="Vu105675">
    <a href="/manual/vote-note.php?id=105675&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105675">
    <a href="/manual/vote-note.php?id=105675&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105675" title="55% like this...">
    2
    </div>
  </div>
  <a href="#105675" class="name">
  <strong class="user"><em>adam at adamhahn dot com</em></strong></a><a class="genanchor" href="#105675"> &para;</a><div class="date" title="2011-09-06 12:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105675">
<div class="phpcode"><code><span class="html">Something to note,<br /><br />If the $original class has not yet been defined or loaded, the auto loader will be invoked in order to try and load it.<br /><br />If the class for which you are trying to create an alias does not exist, or can not be loaded with the auto loader, you will generate a PHP Warning.</span></code></div>
  </div>
 </div>
  <div class="note" id="125441">  <div class="votes">
    <div id="Vu125441">
    <a href="/manual/vote-note.php?id=125441&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125441">
    <a href="/manual/vote-note.php?id=125441&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125441" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125441" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125441"> &para;</a><div class="date" title="2020-10-16 06:48"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125441">
<div class="phpcode"><code><span class="html">Check is alias:<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @param string $class Class name<br /> * @return bool<br /> */<br /></span><span class="keyword">function </span><span class="default">is_alias</span><span class="keyword">(</span><span class="default">string $class</span><span class="keyword">): </span><span class="default">bool<br /></span><span class="keyword">{<br />    return </span><span class="default">$class </span><span class="keyword">!== (new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">))-&gt;</span><span class="default">name</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Get class aliases:<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @param string $class Class name<br /> * @param bool $throw Throw exception at error?<br /> * @return string[]|null Aliases or null at error in silent mode<br /> * @throws InvalidArgumentException Class not exists or it's alias<br /> */<br /></span><span class="keyword">function </span><span class="default">get_class_aliases</span><span class="keyword">(</span><span class="default">string $class</span><span class="keyword">, </span><span class="default">bool $throw </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">): ?array<br />{<br />    </span><span class="comment">/**<br />     * @var array An array of defined classes: keys - classes, values - aliases<br />     */<br />    </span><span class="keyword">static </span><span class="default">$classes </span><span class="keyword">= [];<br />    </span><span class="comment">// check: class exists<br />    </span><span class="keyword">if (! </span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">)) {<br />        if (</span><span class="default">$throw</span><span class="keyword">) {<br />            throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="string">'Class ' </span><span class="keyword">. </span><span class="default">$class </span><span class="keyword">. </span><span class="string">' not exists'</span><span class="keyword">);<br />        }<br />        return </span><span class="default">null</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// refresh list<br />    </span><span class="default">$newClasses </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">get_declared_classes</span><span class="keyword">(), </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$classes</span><span class="keyword">));<br />    if (</span><span class="default">$newClasses</span><span class="keyword">) {<br />        </span><span class="default">$abc </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'z'</span><span class="keyword">);<br />        foreach (</span><span class="default">$newClasses </span><span class="keyword">as </span><span class="default">$newClass</span><span class="keyword">) {<br />            </span><span class="comment">// fast check first char: class_alias() convert alias to lower case<br />            </span><span class="keyword">if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$newClass</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$abc</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">)) {<br />                </span><span class="default">$realClass </span><span class="keyword">= (new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$newClass</span><span class="keyword">))-&gt;</span><span class="default">getName</span><span class="keyword">();<br />                </span><span class="default">$classes</span><span class="keyword">[</span><span class="default">$newClass</span><span class="keyword">] = </span><span class="default">$newClass </span><span class="keyword">!== </span><span class="default">$realClass </span><span class="keyword">? </span><span class="default">$realClass </span><span class="keyword">: </span><span class="default">null</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$classes</span><span class="keyword">[</span><span class="default">$newClass</span><span class="keyword">] = </span><span class="default">null</span><span class="keyword">;<br />            }<br />        }<br />        unset(</span><span class="default">$abc</span><span class="keyword">, </span><span class="default">$newClasses</span><span class="keyword">);<br />    }<br />    </span><span class="comment">// check: is alias?<br />    </span><span class="keyword">if (! empty(</span><span class="default">$classes</span><span class="keyword">[</span><span class="default">$class</span><span class="keyword">])) {<br />        if (</span><span class="default">$throw</span><span class="keyword">) {<br />            throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="default">$class </span><span class="keyword">. </span><span class="string">' is alias for class ' </span><span class="keyword">. </span><span class="default">$classes</span><span class="keyword">[</span><span class="default">$class</span><span class="keyword">]);<br />        }<br />        return </span><span class="default">null</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// find aliases<br />    </span><span class="keyword">return </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$classes</span><span class="keyword">, </span><span class="default">$class</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>Usage:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{}<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'Foo'</span><span class="keyword">, </span><span class="string">'Bar'</span><span class="keyword">);<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'Bar'</span><span class="keyword">, </span><span class="string">'Baz'</span><span class="keyword">);<br /></span><span class="default">$aliases </span><span class="keyword">= </span><span class="default">get_class_aliases</span><span class="keyword">(</span><span class="string">'Foo'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// ['bar', 'baz']<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101636">  <div class="votes">
    <div id="Vu101636">
    <a href="/manual/vote-note.php?id=101636&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101636">
    <a href="/manual/vote-note.php?id=101636&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101636" title="51% like this...">
    1
    </div>
  </div>
  <a href="#101636" class="name">
  <strong class="user"><em>nicolas dot grekas+php at gmail dot com</em></strong></a><a class="genanchor" href="#101636"> &para;</a><div class="date" title="2010-12-31 01:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101636">
<div class="phpcode"><code><span class="html">At first, you might wonder that:<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{}; </span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />is equivalent to:<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{}; class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{}; </span><span class="default">?&gt;<br /></span><br />BUT when derivation creates a new class name - that means, you can then instantiate a new kind of objects - aliasing is just what it says: a synonym, so objects instantiated with the aliased name are of the exact same kind of objects instantiated with the non-aliased name.<br /><br />See this code for example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{};<br />class </span><span class="default">B1 </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{};<br /></span><span class="default">class_alias</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'B2'</span><span class="keyword">);<br /><br /></span><span class="default">$b1 </span><span class="keyword">= new </span><span class="default">B1</span><span class="keyword">; echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$b1</span><span class="keyword">); </span><span class="comment">// prints B1<br /></span><span class="default">$b2 </span><span class="keyword">= new </span><span class="default">B2</span><span class="keyword">; echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$b2</span><span class="keyword">); </span><span class="comment">// prints A !<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120425">  <div class="votes">
    <div id="Vu120425">
    <a href="/manual/vote-note.php?id=120425&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120425">
    <a href="/manual/vote-note.php?id=120425&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120425" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#120425" class="name">
  <strong class="user"><em>sofe2038 at gmail dot com</em></strong></a><a class="genanchor" href="#120425"> &para;</a><div class="date" title="2017-01-07 04:06"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120425">
<div class="phpcode"><code><span class="html">Doesn't work with coupled classes when used along with autoloading.<br /><br />For example, in these classes where each class is autoloaded in a separate class file:<br /><br />Foo.php:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">Foo</span><span class="keyword">{<br />  public function </span><span class="default">fx</span><span class="keyword">(</span><span class="default">Bar $bar</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Bar2.php:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Bar2 </span><span class="keyword">implements </span><span class="default">Foo</span><span class="keyword">{<br />  public function </span><span class="default">fx</span><span class="keyword">(</span><span class="default">Bar2 $bar</span><span class="keyword">){<br />    </span><span class="comment">// some implementation code here<br />  </span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;<br /></span><br />Bar.php:<br /><br /><span class="default">&lt;?php<br />class_alias</span><span class="keyword">(</span><span class="string">"Bar2"</span><span class="keyword">, </span><span class="string">"Bar"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />When used with an autoloader like this:<br /><br /><span class="default">&lt;?php<br />spl_autoload_register</span><span class="keyword">(function(</span><span class="default">$class</span><span class="keyword">){<br />  require(</span><span class="default">$class </span><span class="keyword">. </span><span class="string">".php"</span><span class="keyword">);<br />});<br />new </span><span class="default">Bar</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Results in fatal error:<br /><br />    Declaration of Bar2::fx(Bar2 $bar) must be compatible with Foo::fx(Bar $bar) in ~/Bar2.php on line 2</span></code></div>
  </div>
 </div>
  <div class="note" id="120424">  <div class="votes">
    <div id="Vu120424">
    <a href="/manual/vote-note.php?id=120424&amp;page=function.class-alias&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120424">
    <a href="/manual/vote-note.php?id=120424&amp;page=function.class-alias&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120424" title="0% like this...">
    -5
    </div>
  </div>
  <a href="#120424" class="name">
  <strong class="user"><em>sofe2038 at gmail dot com</em></strong></a><a class="genanchor" href="#120424"> &para;</a><div class="date" title="2017-01-07 04:06"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120424">
<div class="phpcode"><code><span class="html">Doesn't work with coupled classes when used along with autoloading.<br /><br />For example, in these classes where each class is autoloaded in a separate class file:<br /><br />Foo.php:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">Foo</span><span class="keyword">{<br />  public function </span><span class="default">fx</span><span class="keyword">(</span><span class="default">Bar $bar</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Bar2.php:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Bar2 </span><span class="keyword">implements </span><span class="default">Foo</span><span class="keyword">{<br />  public function </span><span class="default">fx</span><span class="keyword">(</span><span class="default">Bar2 $bar</span><span class="keyword">){<br />    </span><span class="comment">// some implementation code here<br />  </span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;<br /></span><br />Bar.php:<br /><br /><span class="default">&lt;?php<br />class_alias</span><span class="keyword">(</span><span class="string">"Bar2"</span><span class="keyword">, </span><span class="string">"Bar"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />When used with an autoloader like this:<br /><br /><span class="default">&lt;?php<br />spl_autoload_register</span><span class="keyword">(function(</span><span class="default">$class</span><span class="keyword">){<br />  require(</span><span class="default">$class </span><span class="keyword">. </span><span class="string">".php"</span><span class="keyword">);<br />});<br />new </span><span class="default">Bar</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Results in fatal error:<br /><br />    Declaration of Bar2::fx(Bar2 $bar) must be compatible with Foo::fx(Bar $bar) in ~/Bar2.php on line 2</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.class-alias&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-alias.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.classobj.php">Classes/Object Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
                                                <li class="">
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
