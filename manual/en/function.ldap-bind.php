<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_bind - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-bind.php">
 <link rel="shorturl" href="https://www.php.net/ldap-bind">
 <link rel="alternate" href="https://www.php.net/ldap-bind" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-add-ext.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-bind-ext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-bind.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-bind.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-bind.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-bind.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-bind.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-bind.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-bind.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-bind.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-bind.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-bind.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-bind.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Bind to LDAP directory" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_bind - Manual" />
<meta name="twitter:description" content="Bind to LDAP directory" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_bind - Manual" />
<meta itemprop="description" content="Bind to LDAP directory" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Bind to LDAP directory" />

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
        <a href="function.ldap-bind-ext.php">
          ldap_bind_ext &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-add-ext.php">
          &laquo; ldap_add_ext        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      <li><a href='ref.ldap.php'>LDAP Functions</a></li>      </ul>
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
            <option value='en/function.ldap-bind.php' selected="selected">English</option>
            <option value='de/function.ldap-bind.php'>German</option>
            <option value='es/function.ldap-bind.php'>Spanish</option>
            <option value='fr/function.ldap-bind.php'>French</option>
            <option value='it/function.ldap-bind.php'>Italian</option>
            <option value='ja/function.ldap-bind.php'>Japanese</option>
            <option value='pt_BR/function.ldap-bind.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-bind.php'>Russian</option>
            <option value='tr/function.ldap-bind.php'>Turkish</option>
            <option value='uk/function.ldap-bind.php'>Ukrainian</option>
            <option value='zh/function.ldap-bind.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-bind" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_bind</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_bind</span> &mdash; <span class="dc-title">Bind to LDAP directory</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ldap-bind-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_bind</strong></span>(<span class="methodparam"><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span> <code class="parameter">$ldap</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$dn</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Binds to the LDAP directory with specified RDN and password.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-bind-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ldap</code></dt>
     <dd>
      <p class="para">
       An <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance, returned by <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">dn</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">password</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </p>
  <p class="para">
   If <code class="parameter">password</code>
   is not specified or is empty, an anonymous bind is attempted. The <code class="parameter">dn</code> can also be left empty for an anonymous bind. This is defined in https://tools.ietf.org/html/rfc2251#section-4.2.2
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-bind-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-bind-changelog">
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
 <td>8.1.0</td>
 <td>
  The <code class="parameter">ldap</code> parameter expects an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">ldap link</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.ldap-bind-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4622">
    <p><strong>Example #1 Using LDAP Bind</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// using ldap bind<br /></span><span style="color: #0000BB">$ldaprdn  </span><span style="color: #007700">= </span><span style="color: #DD0000">'uname'</span><span style="color: #007700">;     </span><span style="color: #FF8000">// ldap rdn or dn<br /></span><span style="color: #0000BB">$ldappass </span><span style="color: #007700">= </span><span style="color: #DD0000">'password'</span><span style="color: #007700">;  </span><span style="color: #FF8000">// associated password<br /><br />// connect to ldap server<br /></span><span style="color: #0000BB">$ldapconn </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"ldap://ldap.example.com"</span><span style="color: #007700">)<br />    or die(</span><span style="color: #DD0000">"Could not connect to LDAP server."</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$ldapconn</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">// binding to ldap server<br />    </span><span style="color: #0000BB">$ldapbind </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_bind</span><span style="color: #007700">(</span><span style="color: #0000BB">$ldapconn</span><span style="color: #007700">, </span><span style="color: #0000BB">$ldaprdn</span><span style="color: #007700">, </span><span style="color: #0000BB">$ldappass</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">// verify binding<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">$ldapbind</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"LDAP bind successful..."</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #DD0000">"LDAP bind failed..."</span><span style="color: #007700">;<br />    }<br /><br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-4623">
    <p><strong>Example #2 Using LDAP Bind Anonymously</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">//using ldap bind anonymously<br /><br />// connect to ldap server<br /></span><span style="color: #0000BB">$ldapconn </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"ldap://ldap.example.com"</span><span style="color: #007700">)<br />    or die(</span><span style="color: #DD0000">"Could not connect to LDAP server."</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$ldapconn</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">// binding anonymously<br />    </span><span style="color: #0000BB">$ldapbind </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_bind</span><span style="color: #007700">(</span><span style="color: #0000BB">$ldapconn</span><span style="color: #007700">);<br /><br />    if (</span><span style="color: #0000BB">$ldapbind</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"LDAP bind anonymous successful..."</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #DD0000">"LDAP bind anonymous failed..."</span><span style="color: #007700">;<br />    }<br /><br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ldap-bind-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ldap-bind-ext.php" class="function" rel="rdfs-seeAlso">ldap_bind_ext()</a> - Bind to LDAP directory</span></li>
    <li><span class="function"><a href="function.ldap-unbind.php" class="function" rel="rdfs-seeAlso">ldap_unbind()</a> - Unbind from LDAP directory</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-bind.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-bind%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-bind&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-bind.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">39 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103034">  <div class="votes">
    <div id="Vu103034">
    <a href="/manual/vote-note.php?id=103034&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103034">
    <a href="/manual/vote-note.php?id=103034&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103034" title="69% like this...">
    55
    </div>
  </div>
  <a href="#103034" class="name">
  <strong class="user"><em>gtkspert_SPAMMENOT_ at gmail dot com</em></strong></a><a class="genanchor" href="#103034"> &para;</a><div class="date" title="2011-03-21 05:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103034">
<div class="phpcode"><code><span class="html">Interesting point,<br /><br />if you can't bind to active directory with the error "49: Invalid Credentials", you can get the extended error output from the ldap_get_option function, using the option: LDAP_OPT_DIAGNOSTIC_MESSAGE. Unfortunately php hasn't defined this by default, but it's value is 0x0032.<br /><br />This is useful if a user must change their password at first login (Data: 773), or if their account has expired on the network (Data: 532).<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="default">LDAP_OPT_DIAGNOSTIC_MESSAGE</span><span class="keyword">, </span><span class="default">0x0032</span><span class="keyword">)<br /><br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">'ldap://active.directory.server/'</span><span class="keyword">);<br /></span><span class="default">$bind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'expiredpass'</span><span class="keyword">);<br /><br />if (</span><span class="default">$bind</span><span class="keyword">) {<br />    if (</span><span class="default">ldap_get_option</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">LDAP_OPT_DIAGNOSTIC_MESSAGE</span><span class="keyword">, </span><span class="default">$extended_error</span><span class="keyword">)) {<br />        echo </span><span class="string">"Error Binding to LDAP: </span><span class="default">$extended_error</span><span class="string">"</span><span class="keyword">;<br />    } else {<br />        echo </span><span class="string">"Error Binding to LDAP: No additional information is available."</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Or something to that effect..<br /><br />It took me a while to work this one out, so i figured i'd share my results..</span></code></div>
  </div>
 </div>
  <div class="note" id="86635">  <div class="votes">
    <div id="Vu86635">
    <a href="/manual/vote-note.php?id=86635&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86635">
    <a href="/manual/vote-note.php?id=86635&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86635" title="71% like this...">
    26
    </div>
  </div>
  <a href="#86635" class="name">
  <strong class="user"><em>james at NOSPAM dot revillini dot com</em></strong></a><a class="genanchor" href="#86635"> &para;</a><div class="date" title="2008-10-27 06:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86635">
<div class="phpcode"><code><span class="html">I couldn't get ldap_bind to work on an ldaps connection until I followed some instructions about creating an ldap.conf file.  I don't see these instructions anywhere on the php site.  Maybe they're on the OpenLDAP site, but I thought it would be useful to have here as well.  Credit goes to a dude known as 'LRM', and I found my solution here: <a href="http://lists.horde.org/archives/sork/Week-of-Mon-20040503/001578.html" rel="nofollow" target="_blank">http://lists.horde.org/archives/sork/Week-of-Mon-20040503/001578.html</a><br /><br />My setup is XAMPP on Win XP.<br />###### ApacheFriends XAMPP (basic package) version 1.6.3a ######<br /><br />  + Apache 2.2.4<br />  + MySQL 5.0.45<br />  + PHP 5.2.3 + PHP 4.4.7 + PEAR<br />  + PHP-Switch win32 1.0 (please use the "php-switch.bat")<br />  + XAMPP Control Version 2.5 from www.nat32.com    <br />  + XAMPP Security 1.0    <br />  + SQLite 2.8.15<br />  + OpenSSL 0.9.8e<br />  + phpMyAdmin 2.10.3<br />  + ADOdb 4.95<br />  + Mercury Mail Transport System v4.01b<br />  + FileZilla FTP Server 0.9.23<br />  + Webalizer 2.01-10<br />  + Zend Optimizer 3.3.0<br />  + eAccelerator 0.9.5.1 for PHP 5.2.3  (comment out in the php.ini)<br /><br />1. create C:\OpenLDAP\sysconf\ldap.conf (Yes, it MUST be this path because it's hard-coded in the dll)<br />2. put this line at the top:<br /><br />TLS_REQCERT never<br /><br />3. Save, stop/start apache.<br /><br />The reason is, I think, because it doesn't understand the certificate, so this directive tells it to not bother checking it.  I guess that could be unsafe in some cases, but in my case I'm confident with the server I'm connecting to.<br /><br />My connection code was as follows (nothing new here, I don't think):<br /><br /><span class="default">&lt;?php<br />$con </span><span class="keyword">= @</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">'ldaps://the.ldap.server'</span><span class="keyword">, </span><span class="default">636</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(@</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">, </span><span class="string">'user@sub.domain.com'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Good luck!  LDAPS can be a real bitch.</span></code></div>
  </div>
 </div>
  <div class="note" id="73718">  <div class="votes">
    <div id="Vu73718">
    <a href="/manual/vote-note.php?id=73718&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73718">
    <a href="/manual/vote-note.php?id=73718&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73718" title="77% like this...">
    12
    </div>
  </div>
  <a href="#73718" class="name">
  <strong class="user"><em>alex dot everett at okstate dot edu</em></strong></a><a class="genanchor" href="#73718"> &para;</a><div class="date" title="2007-03-07 12:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73718">
<div class="phpcode"><code><span class="html">A number of examples and implementations of authentication schemes which use LDAP simple binds to authenticate users fail to properly sanitize user-submitted data. This can allow for an anonymous user to authenticate to a web-based application as an existing user. Provided below is a brief description and example of how this vulnerability can arise. For more detailed information please visit the links at the bottom of this posting.<br /><br />The bind operation of LDAP, as described in RFC 4513, provides a method which allows for authentication of users. For the Simple Authentication Method a user may use the anonymous authentication mechanism, the unauthenticated authentication mechanism, or the name/password authentication mechanism. The unauthenticated authentication mechanism is used when a client who desires to establish an anonymous authorization state passes a non-zero length distinguished name and a zero length password. Most LDAP servers either can be configured to allow this mechanism or allow it by default. Web-based applications which perform the simple bind operation with the client's credentials are at risk when an anonymous authorization state is established. This can occur when the web-based application passes a distinguished name and a zero length password to the LDAP server.<br />This is commonly encountered when no password is provided from the client to the web-based application. This situation is described in some of the postings found below. For this situation, the recommendations found in other postings is sufficient to prevent authentication bypass.<br />However, no prior postings at php.net describe a situation in which a client may pass a distinguished username and a password of non-zero length to the web-based application which results in an anonymous authorization state. Below is an example of this situation.<br /><br />$dn="testuser";<br />$pass="\x00\x41";<br />if (empty($dn) or empty($pass)) { exit(); } //check for empty strings<br />//if (preg_match('/[^a-zA-Z]/',$dn) or preg_match('/[^a-zA-Z0-9\x20!@#$%^&amp;*()]/',$pass)) { exit(); } //check for expected values (whitelisting)<br />//if (preg_match('/\x00/',$dn) or preg_match('/\x00/',$pass)) { exit(); } //check for null byte (blacklisting)<br />$ldapconn=ldap_connect("192.0.2.2") or die("Could not connect to LDAP server.");<br />if ($ldapconn) {<br />        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);<br />        $ldapbind=ldap_bind($ldapconn, $dn, $pass);<br />        if ($ldapbind) {<br />                echo("success");<br />        } else {<br />                echo("fail");<br />                }<br />        }<br /><br />References:<br /><a href="http://security.okstate.edu" rel="nofollow" target="_blank">http://security.okstate.edu</a></span></code></div>
  </div>
 </div>
  <div class="note" id="72795">  <div class="votes">
    <div id="Vu72795">
    <a href="/manual/vote-note.php?id=72795&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72795">
    <a href="/manual/vote-note.php?id=72795&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72795" title="75% like this...">
    10
    </div>
  </div>
  <a href="#72795" class="name">
  <strong class="user"><em>john dot hargrove at sellingsource dot com</em></strong></a><a class="genanchor" href="#72795"> &para;</a><div class="date" title="2007-02-01 03:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72795">
<div class="phpcode"><code><span class="html">Note that you have to specify the protocol version prior to making a call to ldap_bind, when the server is expecting LDAP protocol version 3.  If you do not, you will receive a warning and fail to bind, such as:<br /><br />ldap_bind(): Unable to bind to server: Protocol error<br /><br />In order to avoid this, make this call:<br /><br /><span class="default">&lt;?php<br />ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Where $ds is the result returned by ldap_connect(...);</span></code></div>
  </div>
 </div>
  <div class="note" id="101445">  <div class="votes">
    <div id="Vu101445">
    <a href="/manual/vote-note.php?id=101445&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101445">
    <a href="/manual/vote-note.php?id=101445&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101445" title="77% like this...">
    5
    </div>
  </div>
  <a href="#101445" class="name">
  <strong class="user"><em>elsint at yahoo dot com</em></strong></a><a class="genanchor" href="#101445"> &para;</a><div class="date" title="2010-12-16 02:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101445">
<div class="phpcode"><code><span class="html">If you are still having trouble after following all the instructions on the Web to get LDAPS to work, here's what worked for me:<br /><br />I was trying to do LDAPS connection (our LDAP server was using port 40636) by running following command:<br /><br />ldap_connect("www.example.com",40636)<br /><br />This didn't work for days till I changed it to the following format:<br /><br />ldap_connect("ldaps://www.example.com:40636")<br /><br />Hope it'll help some out there.<br /><br />-Cagdas</span></code></div>
  </div>
 </div>
  <div class="note" id="51587">  <div class="votes">
    <div id="Vu51587">
    <a href="/manual/vote-note.php?id=51587&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51587">
    <a href="/manual/vote-note.php?id=51587&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51587" title="80% like this...">
    3
    </div>
  </div>
  <a href="#51587" class="name">
  <strong class="user"><em>edi01 at gmx dot at</em></strong></a><a class="genanchor" href="#51587"> &para;</a><div class="date" title="2005-04-05 01:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51587">
<div class="phpcode"><code><span class="html">complete ldap authentication script:<br /><br />function checkldapuser($username,$password,$ldap_server){<br />  if($connect=@ldap_connect($ldap_server)){ // if connected to ldap server<br /><br />    if (ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3)) {<br />      echo "version 3&lt;br&gt;\n";<br />    } else {<br />      echo "version 2&lt;br&gt;\n";<br />    }<br />    echo "verification on '$ldap_server': ";<br /><br />    // bind to ldap connection<br />    if(($bind=@ldap_bind($connect)) == false){<br />      print "bind:__FAILED__&lt;br&gt;\n";<br />      return false;<br />    }<br /><br />    // search for user<br />    if (($res_id = ldap_search( $connect,<br />                                "dc=auto,dc=tuwien,dc=ac,dc=at",<br />                                "uid=$username")) == false) {<br />      print "failure: search in LDAP-tree failed&lt;br&gt;";<br />      return false;<br />    }<br /><br />    if (ldap_count_entries($connect, $res_id) != 1) {<br />      print "failure: username $username found more than once&lt;br&gt;\n";<br />      return false;<br />    }<br /><br />    if (( $entry_id = ldap_first_entry($connect, $res_id))== false) {<br />      print "failur: entry of searchresult couln't be fetched&lt;br&gt;\n";<br />      return false;<br />    }<br /><br />    if (( $user_dn = ldap_get_dn($connect, $entry_id)) == false) {<br />      print "failure: user-dn coulnd't be fetched&lt;br&gt;\n";<br />      return false;<br />    }<br /><br />    /* Authentifizierung des User */<br />    if (($link_id = ldap_bind($connect, $user_dn, $password)) == false) {<br />      print "failure: username, password didn't match: $user_dn&lt;br&gt;\n";<br />      return false;<br />    }<br /><br />    return true;<br />    @ldap_close($connect);<br />  } else {                                  // no conection to ldap server<br />    echo "no connection to '$ldap_server'&lt;br&gt;\n";<br />  }<br /><br />  echo "failed: ".ldap_error($connect)."&lt;BR&gt;\n";<br /><br />  @ldap_close($connect);<br />  return(false);<br /><br />}//end function checkldapuser<br /><br />Here a sample for using this function:<br /><br />if (checkldapuser('myuser', 'secretpassword', 'ldap://link.to.ldap')) {<br />  echo "ACCESS GRANTED\n";<br />} else {<br />  echo "ACCESS DENIED\n";<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="93345">  <div class="votes">
    <div id="Vu93345">
    <a href="/manual/vote-note.php?id=93345&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93345">
    <a href="/manual/vote-note.php?id=93345&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93345" title="73% like this...">
    7
    </div>
  </div>
  <a href="#93345" class="name">
  <strong class="user"><em>spam[AT]it-blog[DOT]net</em></strong></a><a class="genanchor" href="#93345"> &para;</a><div class="date" title="2009-09-04 07:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93345">
<div class="phpcode"><code><span class="html">When using LDAP with SSL and a LDAP server which uses a self-signed SSL certificate normally no connection will be established. Therefor you have to allow such connections explicitly.<br />With Linux (e.g. Debian, Ubuntu) you have to add "TLS_REQCERT never" to your /etc/ldap/ldap.conf. On other distributions this config file may be located somewhere else.</span></code></div>
  </div>
 </div>
  <div class="note" id="57882">  <div class="votes">
    <div id="Vu57882">
    <a href="/manual/vote-note.php?id=57882&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57882">
    <a href="/manual/vote-note.php?id=57882&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57882" title="75% like this...">
    4
    </div>
  </div>
  <a href="#57882" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#57882"> &para;</a><div class="date" title="2005-10-17 11:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57882">
<div class="phpcode"><code><span class="html">When using Active Directory 2003 (possibly also 2000) you can't search anonymously so you have to bind with a (known) user and password. Or else you will get an Search operations error. I also can confirm that an empty password bind succeeds! So test for an empty password first!<br /><br />Some excellent information is found here:<br /><a href="http://www.scit.wlv.ac.uk/~jphb/sst/php/extra/ldap.html" rel="nofollow" target="_blank">http://www.scit.wlv.ac.uk/~jphb/sst/php/extra/ldap.html</a><br /><a href="http://www.scit.wlv.ac.uk/~jphb/sst/basics/ldap.html" rel="nofollow" target="_blank">http://www.scit.wlv.ac.uk/~jphb/sst/basics/ldap.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="107048">  <div class="votes">
    <div id="Vu107048">
    <a href="/manual/vote-note.php?id=107048&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107048">
    <a href="/manual/vote-note.php?id=107048&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107048" title="72% like this...">
    5
    </div>
  </div>
  <a href="#107048" class="name">
  <strong class="user"><em>IanB</em></strong></a><a class="genanchor" href="#107048"> &para;</a><div class="date" title="2012-01-03 12:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107048">
<div class="phpcode"><code><span class="html">If you're using SSL (e.g. ldaps) and ldap_bind is throwing 'Unable to bind to server:' errors, check that the hostname used in the ldap_connect matches the 'CN' in the SSL certificate on the LDAP server. For example:<br /><br />&lt;?<br />   ldap_connect('ldaps://ldap01');<br />  // 'ldap01' should match the CN in your LDAP server's SSL cert, otherwise the subsequent ldap_bind() will throw a bind error<br /><br />?&gt;<br /><br />You can check your LDAP server's SSL cert using Openssl utility (Linux) - look for the 'Subject' line:<br /><br />   $ openssl x509 -in /etc/pki/tls/certs/ldap01.crt -text -noout<br />   ...<br />        Subject: C=XY, ST=My State, L=My City, O=My Org, CN=ldap01/emailAddress=me@domain.com<br />   ...<br /><br />I recently applied some updates to my system (now Centos 5.7 and PHP 5.3.6) and started having this issue with PHP scripts that had been fine previously where I was simply using the IP address of the server. Replacing the IP address with the hostname fixed my issue.</span></code></div>
  </div>
 </div>
  <div class="note" id="109371">  <div class="votes">
    <div id="Vu109371">
    <a href="/manual/vote-note.php?id=109371&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109371">
    <a href="/manual/vote-note.php?id=109371&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109371" title="66% like this...">
    1
    </div>
  </div>
  <a href="#109371" class="name">
  <strong class="user"><em>deniskutin at gmail dot com</em></strong></a><a class="genanchor" href="#109371"> &para;</a><div class="date" title="2012-07-11 12:07"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109371">
<div class="phpcode"><code><span class="html">It's nessesary to add: 
<br />
<br /><span class="default">&lt;?php
<br />ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)
<br /></span><span class="default">?&gt;
<br /></span>
<br />for ldap_bind returned true, while you try to bind for openldap (at least version 2.4.21)</span></code></div>
  </div>
 </div>
  <div class="note" id="56782">  <div class="votes">
    <div id="Vu56782">
    <a href="/manual/vote-note.php?id=56782&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56782">
    <a href="/manual/vote-note.php?id=56782&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56782" title="66% like this...">
    1
    </div>
  </div>
  <a href="#56782" class="name">
  <strong class="user"><em>darkstar_ae at hotmail dot com</em></strong></a><a class="genanchor" href="#56782"> &para;</a><div class="date" title="2005-09-15 12:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56782">
<div class="phpcode"><code><span class="html">This may be a security issue but after tinkering for hours with the below ldap auth function (edi01 at gmx dot at), I discovered that the ldap_bind function will return true if you enter a valid username AND a NULL value!<br /><br />so if that function were to receive something like $username = 'someuser' and $password = '', it would return true. As long as it isn't a null value the function will work as expected. Might as well check if it is null or empty then.</span></code></div>
  </div>
 </div>
  <div class="note" id="120873">  <div class="votes">
    <div id="Vu120873">
    <a href="/manual/vote-note.php?id=120873&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120873">
    <a href="/manual/vote-note.php?id=120873&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120873" title="62% like this...">
    4
    </div>
  </div>
  <a href="#120873" class="name">
  <strong class="user"><em>RazmanAlias</em></strong></a><a class="genanchor" href="#120873"> &para;</a><div class="date" title="2017-03-25 11:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120873">
<div class="phpcode"><code><span class="html">I use PHP 7.1.*. In this version ldap_bind will throw a RuntimeException if it fails to bind. I've tried with wrong host name, correct host and wrong password,  correct host and invalid DN syntax. All fail conditions seems to throw RuntimeException.<br /><br /> So this function probably doesn't return false.</span></code></div>
  </div>
 </div>
  <div class="note" id="105620">  <div class="votes">
    <div id="Vu105620">
    <a href="/manual/vote-note.php?id=105620&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105620">
    <a href="/manual/vote-note.php?id=105620&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105620" title="60% like this...">
    5
    </div>
  </div>
  <a href="#105620" class="name">
  <strong class="user"><em>marnijt at LIKEHAM dot gmail dot com</em></strong></a><a class="genanchor" href="#105620"> &para;</a><div class="date" title="2011-09-01 04:46"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105620">
<div class="phpcode"><code><span class="html">After a lot of trail and error i've found the way to authenticate to apple's Opendirectory (snow leopard server) and thought it maybe useful to share.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// using ldap bind<br />    </span><span class="default">$ldaprdn  </span><span class="keyword">= </span><span class="string">'uid=USERNAME,cn=users,dc=HOSTNAME,dc=DOMAIN,dc=com'</span><span class="keyword">;     </span><span class="comment">// ldap rdn or dn<br />    </span><span class="default">$ldappass </span><span class="keyword">= </span><span class="string">'PASSWORD'</span><span class="keyword">;  </span><span class="comment">// associated password<br /><br />    // connect to ldap server<br />    </span><span class="default">$ldapconn </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">"HOSTNAME.DOMAIN.com"</span><span class="keyword">)<br />            or die(</span><span class="string">"Could not connect to LDAP server."</span><span class="keyword">);<br /><br />    </span><span class="comment">// Set some ldap options for talking to <br />    </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldapconn</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldapconn</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />    if (</span><span class="default">$ldapconn</span><span class="keyword">) {<br /><br />            </span><span class="comment">// binding to ldap server<br />            </span><span class="default">$ldapbind </span><span class="keyword">= @</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldapconn</span><span class="keyword">, </span><span class="default">$ldaprdn</span><span class="keyword">, </span><span class="default">$ldappass</span><span class="keyword">);<br /><br />            </span><span class="comment">// verify binding<br />            </span><span class="keyword">if (</span><span class="default">$ldapbind</span><span class="keyword">) {<br />                echo </span><span class="string">"LDAP bind successful...\n"</span><span class="keyword">;<br />            } else {<br />                echo </span><span class="string">"LDAP bind failed...\n"</span><span class="keyword">;<br />            }<br /><br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109095">  <div class="votes">
    <div id="Vu109095">
    <a href="/manual/vote-note.php?id=109095&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109095">
    <a href="/manual/vote-note.php?id=109095&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109095" title="60% like this...">
    2
    </div>
  </div>
  <a href="#109095" class="name">
  <strong class="user"><em>peter dot schlaf at web dot de</em></strong></a><a class="genanchor" href="#109095"> &para;</a><div class="date" title="2012-06-20 12:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109095">
<div class="phpcode"><code><span class="html">I had a problem doing a ldap_bind over SSL against Active Directory. The server kept telling me: 'Unable to bind to server:'. To solve this (OS: CentOS 6) make sure that /etc/openldap/ldap.conf has this line:<br /><br />TLS_REQCERT allow</span></code></div>
  </div>
 </div>
  <div class="note" id="68733">  <div class="votes">
    <div id="Vu68733">
    <a href="/manual/vote-note.php?id=68733&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68733">
    <a href="/manual/vote-note.php?id=68733&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68733" title="60% like this...">
    2
    </div>
  </div>
  <a href="#68733" class="name">
  <strong class="user"><em>david dot marsh at hartfordlife dot com</em></strong></a><a class="genanchor" href="#68733"> &para;</a><div class="date" title="2006-08-08 12:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68733">
<div class="phpcode"><code><span class="html">had to do a bunch of research on this, but it does work, once config'd correctly.<br /><br />using Apache/2.2.3 (Win32) mod_ssl/2.2.3 OpenSSL/0.9.8b <br />PHP PHP Version 5.1.5-dev<br /><br />ldap_bind was getting "81 Can't contact LDAP server" which was really annoying, since the connection worked fine without "ldaps"<br />using:<br /><br />$ldapconnect = @ldap_connect( $connection_string );<br /><br />well, actually the bind was really the one failing...<br /><br />$bind = ldap_bind($ldapconnect, $client, $this-&gt;objSecurityLogin-&gt;Password);<br /><br />many attempts to determine until i smartened up and turned on the trace level:<br /><br />ldap_set_option(NULL, LDAP_OPT_DEBUG_LEVEL, 7);<br /><br />which must go before the connect!<br /><br />found that on windows, you can't specifiy a quote in the ldap.conf:<br />i had:<br />TLS_REQCERT never<br />TLS_CACERT "C:\\Documents\\Tools\\Apache2\\conf\\ssl\\ad.pem"<br />which throws the error..<br />TLS: could not load verify locations (file:`"C:\Documents\Tools\Apache2\conf\ssl\ad.pem"',dir:`').<br />TLS: error:0200107B:system library:fopen:Unknown error .\crypto\bio\bss_file.c:122<br />TLS: error:2006D002:BIO routines:BIO_new_file:system lib .\crypto\bio\bss_file.c:127<br />TLS: error:0B084002:x509 certificate routines:X509_load_cert_crl_file:system lib .\crypto\x509\by_file.c:274<br />ldap_err2string<br /><br />changed to:<br />TLS_REQCERT never<br />TLS_CACERT C:\\Documents\\Tools\\Apache2\\conf\\ssl\\ad.pem <br />which cleans it up as:<br />TLS trace: SSL_connect:before/connect initialization<br />TLS trace: SSL_connect:SSLv2/v3 write client hello A<br />TLS trace: SSL_connect:SSLv3 read server hello A<br />TLS certificate verification: depth: 1, err: 0, subject: /DC=xxx/DC=yyy/CN=zzzz, issuer: /DC=abab/DC=yyy/CN=zzzz<br />TLS certificate verification: depth: 0, err: 0, subject: ......<br /><br />so the moral to the story is even though PHP wants quotes in some windows config parms, it won't work if its in ldap.conf!</span></code></div>
  </div>
 </div>
  <div class="note" id="118543">  <div class="votes">
    <div id="Vu118543">
    <a href="/manual/vote-note.php?id=118543&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118543">
    <a href="/manual/vote-note.php?id=118543&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118543" title="57% like this...">
    2
    </div>
  </div>
  <a href="#118543" class="name">
  <strong class="user"><em>info at multiotp dot net</em></strong></a><a class="genanchor" href="#118543"> &para;</a><div class="date" title="2015-12-24 04:15"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118543">
<div class="phpcode"><code><span class="html">GnuTLS and SChannel (Microsoft) implementations are not (yet) compatible for TLS 1.2 negotiation during LDAPS binding (when binding with Microsoft Windows 2012R2 server).<br /><br />The trick is to disable TLS1.2 before using LDAP functions:<br /><br />putenv(‘LDAPTLS_CIPHER_SUITE=NORMAL:!VERS-TLS1.2’);</span></code></div>
  </div>
 </div>
  <div class="note" id="115247">  <div class="votes">
    <div id="Vu115247">
    <a href="/manual/vote-note.php?id=115247&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115247">
    <a href="/manual/vote-note.php?id=115247&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115247" title="57% like this...">
    1
    </div>
  </div>
  <a href="#115247" class="name">
  <strong class="user"><em>john dot doe at somewhere dot org</em></strong></a><a class="genanchor" href="#115247"> &para;</a><div class="date" title="2014-06-20 05:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115247">
<div class="phpcode"><code><span class="html">In some structures its not possible to know the dn or rdn up front. However one can use $ldapuser= $samaccountname.'@'.domainname;</span></code></div>
  </div>
 </div>
  <div class="note" id="46660">  <div class="votes">
    <div id="Vu46660">
    <a href="/manual/vote-note.php?id=46660&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46660">
    <a href="/manual/vote-note.php?id=46660&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46660" title="56% like this...">
    2
    </div>
  </div>
  <a href="#46660" class="name">
  <strong class="user"><em>jakob at grimstveit dot no</em></strong></a><a class="genanchor" href="#46660"> &para;</a><div class="date" title="2004-10-19 08:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46660">
<div class="phpcode"><code><span class="html">As "john dot lewis at waldenweb dot com" correctly writes (and this is important to note and SHOULD be incorporated into the documentation as a warning - trying to bind with specific username and empty password will return TRUE.</span></code></div>
  </div>
 </div>
  <div class="note" id="128898">  <div class="votes">
    <div id="Vu128898">
    <a href="/manual/vote-note.php?id=128898&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128898">
    <a href="/manual/vote-note.php?id=128898&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128898" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128898" class="name">
  <strong class="user"><em>Christian Stoller</em></strong></a><a class="genanchor" href="#128898"> &para;</a><div class="date" title="2023-09-19 09:09"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128898">
<div class="phpcode"><code><span class="html">When using LDAP with SSL and a LDAP server which uses a self-signed SSL certificate the connection may fail with the error "Can't contact LDAP server". To make the connection work, use the options to point to the public cert file (see <a href="https://www.php.net/manual/en/ldap.constants.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/ldap.constants.php</a>).<br /><br />Alternatively you can disable the certification check. But keep in mind that this is a security risk if the connection is routed over a public network!<br /><br />This is achieved by:<br /><br /><span class="default">&lt;?php<br />$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">'ldaps://myhost:636'</span><span class="keyword">);<br /></span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="string">'{your_ldap_dn}'</span><span class="keyword">, </span><span class="string">'{your_ldap_password}'</span><span class="keyword">)<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_X_TLS_REQUIRE_CERT</span><span class="keyword">, </span><span class="default">LDAP_OPT_X_TLS_ALLOW</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127351">  <div class="votes">
    <div id="Vu127351">
    <a href="/manual/vote-note.php?id=127351&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127351">
    <a href="/manual/vote-note.php?id=127351&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127351" title="100% like this...">
    2
    </div>
  </div>
  <a href="#127351" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#127351"> &para;</a><div class="date" title="2022-07-27 05:33"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127351">
<div class="phpcode"><code><span class="html">LDAPS over SSH port forwarding. <br />It may be that, when developing/debugging, you don't have direct access to the LDAP server.  You can use SSH port-forwarding, but you need to disable the cert checks temporarily. Here's the easiest way to do it.<br /><br />//Enable debugging, so you can see what's failing.<br />ldap_set_option(NULL, LDAP_OPT_DEBUG_LEVEL,7);<br /><br />//Disable the TLS certificate check (it will mismatch on the domain). Either<br />//edit /etc/ldap/ldap.conf and set "TLS_REQCERT never", or in your script:<br />putenv('LDAPTLS_REQCERT=never');<br /><br />//Point your ldaps url at localhost. E.g.<br />$ldap_url = "ldaps://localhost:63600";<br /><br />//Do the SSH port forward (in another terminal). E.g.<br />ssh -L 63600:your_real_ldap_server:636 your_proxy_server<br /><br />//And continue as normal...<br />ldap_connect($ldap_url);</span></code></div>
  </div>
 </div>
  <div class="note" id="129277">  <div class="votes">
    <div id="Vu129277">
    <a href="/manual/vote-note.php?id=129277&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129277">
    <a href="/manual/vote-note.php?id=129277&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129277" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129277" class="name">
  <strong class="user"><em>andreas at heigl dot org</em></strong></a><a class="genanchor" href="#129277"> &para;</a><div class="date" title="2024-02-25 04:55"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129277">
<div class="phpcode"><code><span class="html">This function can cause errors that might be expected to happen during ldap_connect.<br /><br />As ldap_connect is - contrary to it's name - is not connecting to any server at all, usually the ldap_bind is the first command to actually hit a server and therefore can cause issues that one would not expect to happen here.</span></code></div>
  </div>
 </div>
  <div class="note" id="105037">  <div class="votes">
    <div id="Vu105037">
    <a href="/manual/vote-note.php?id=105037&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105037">
    <a href="/manual/vote-note.php?id=105037&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105037" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105037" class="name">
  <strong class="user"><em>bydand1959 at yahoo dot com</em></strong></a><a class="genanchor" href="#105037"> &para;</a><div class="date" title="2011-07-24 04:16"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105037">
<div class="phpcode"><code><span class="html">LDAP control support is missing from this implementation. Response controls might be part of the response(s) to the BIND request and must be handled in code.</span></code></div>
  </div>
 </div>
  <div class="note" id="58472">  <div class="votes">
    <div id="Vu58472">
    <a href="/manual/vote-note.php?id=58472&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58472">
    <a href="/manual/vote-note.php?id=58472&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58472" title="100% like this...">
    1
    </div>
  </div>
  <a href="#58472" class="name">
  <strong class="user"><em>baroque at citromail dot hu</em></strong></a><a class="genanchor" href="#58472"> &para;</a><div class="date" title="2005-11-05 01:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58472">
<div class="phpcode"><code><span class="html">This code sample shows how to connect and bind to eDirectory in PHP using LDAP for Netware.<br /><br /><span class="default">&lt;?php<br /><br />$server</span><span class="keyword">=</span><span class="string">'137.65.138.159'</span><span class="keyword">;<br /></span><span class="default">$admin</span><span class="keyword">=</span><span class="string">'cn=admin,o=novell'</span><span class="keyword">;<br /></span><span class="default">$passwd</span><span class="keyword">=</span><span class="string">'novell'</span><span class="keyword">;<br /><br /></span><span class="default">$ds</span><span class="keyword">=</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">);  </span><span class="comment">// assuming the LDAP server is on this host<br /><br /></span><span class="keyword">if (</span><span class="default">$ds</span><span class="keyword">) {<br />    </span><span class="comment">// bind with appropriate dn to give update access<br />    </span><span class="default">$r</span><span class="keyword">=</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$admin</span><span class="keyword">, </span><span class="default">$passwd</span><span class="keyword">);<br />    if(!</span><span class="default">$r</span><span class="keyword">) die(</span><span class="string">"ldap_bind failed&lt;br&gt;"</span><span class="keyword">);<br /><br />    echo </span><span class="string">"ldap_bind success"</span><span class="keyword">;<br />    </span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">);<br />} else {<br />    echo </span><span class="string">"Unable to connect to LDAP server"</span><span class="keyword">; <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84007">  <div class="votes">
    <div id="Vu84007">
    <a href="/manual/vote-note.php?id=84007&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84007">
    <a href="/manual/vote-note.php?id=84007&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84007" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84007" class="name">
  <strong class="user"><em>Devia dot Fan at gmail dot com</em></strong></a><a class="genanchor" href="#84007"> &para;</a><div class="date" title="2008-06-23 10:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84007">
<div class="phpcode"><code><span class="html">Hi All, I just thought people should realize that the bug, or whatever change that was implemented with slapd and Openldap for the version V3 protocol has either not been repaired, or isn;t believed to be a bug or whatever...but still requires an implicit setting to V3 for use of the ldap_bind function. I am using Apache 2 and PHP 5.1 with LDAP 2. The default is set to deny V2 protocol, and even reconfiguring the slapd config file will not fix the problem. <br /><br />You must still use the ldap_set_option function. <br /><br />EX:<br /><br /><span class="default">&lt;?php <br />    $ldapHost </span><span class="keyword">= </span><span class="string">"ldap://server"</span><span class="keyword">;<br />        </span><span class="default">$ldapPort </span><span class="keyword">= </span><span class="string">"port"</span><span class="keyword">;<br />    </span><span class="default">$ldapUser </span><span class="keyword">=</span><span class="string">"cn=name,dc=domain"</span><span class="keyword">;<br />    </span><span class="default">$ldapPswd </span><span class="keyword">=</span><span class="string">"password"</span><span class="keyword">;<br /><br /></span><span class="default">$ldapLink </span><span class="keyword">=</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldapHost</span><span class="keyword">, </span><span class="default">$ldapPort</span><span class="keyword">)<br />    or die(</span><span class="string">"Can't establish LDAP connection"</span><span class="keyword">);<br /><br />if (</span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldapLink</span><span class="keyword">,</span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">))<br />{<br />    echo </span><span class="string">"Using LDAP v3"</span><span class="keyword">;<br />}else{<br />    echo </span><span class="string">"Failed to set version to protocol 3"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldapLink</span><span class="keyword">,</span><span class="default">$ldapUser</span><span class="keyword">,</span><span class="default">$ldapPswd</span><span class="keyword">)<br />    or die(</span><span class="string">"Can't bind to server."</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Thanks to Ken on below for showing the way. There was a slight code error in what he chose as his link_id, but thats all. This code above worked nice and shinny, and demonstrates we are still working with 2004 problems. I wish they would update this in the code above.</span></code></div>
  </div>
 </div>
  <div class="note" id="50309">  <div class="votes">
    <div id="Vu50309">
    <a href="/manual/vote-note.php?id=50309&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50309">
    <a href="/manual/vote-note.php?id=50309&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50309" title="no votes...">
    0
    </div>
  </div>
  <a href="#50309" class="name">
  <strong class="user"><em>owen at delong dot com</em></strong></a><a class="genanchor" href="#50309"> &para;</a><div class="date" title="2005-02-24 04:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50309">
<div class="phpcode"><code><span class="html">I am assuming that ldap_bind does a simple bind and that for other<br />types of bind, ldap_sasl_bind should be used.<br /><br />Also, while the allow bind v2 solution will work with slapd, you really should<br />use ldap v3 if at all possible because of the security improvements and<br />better protocol definition.  LDAP v2 is largely deprecated at this point.<br /><br />Hopefully the PHP default LDAP version will move to v3 soon.</span></code></div>
  </div>
 </div>
  <div class="note" id="50060">  <div class="votes">
    <div id="Vu50060">
    <a href="/manual/vote-note.php?id=50060&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50060">
    <a href="/manual/vote-note.php?id=50060&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50060" title="no votes...">
    0
    </div>
  </div>
  <a href="#50060" class="name">
  <strong class="user"><em>phredbroughton at yahoo dot com</em></strong></a><a class="genanchor" href="#50060"> &para;</a><div class="date" title="2005-02-16 11:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50060">
<div class="phpcode"><code><span class="html">As noted before with the password, I have found that if either  of the valuse for user or password are blank, or as in my case a typo resulted in a blank user as it was an undefined variable, the ldap_bind() will just perform an anonymous bind and return true!<br />Shouldn't this detect the presence of the additional values and return an error? At least if the user or password is passed. If they are both blank I'm not sure what it should do.</span></code></div>
  </div>
 </div>
  <div class="note" id="47685">  <div class="votes">
    <div id="Vu47685">
    <a href="/manual/vote-note.php?id=47685&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47685">
    <a href="/manual/vote-note.php?id=47685&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47685" title="no votes...">
    0
    </div>
  </div>
  <a href="#47685" class="name">
  <strong class="user"><em>wkaiser at mpimf-heidelberg dot mpg dot de</em></strong></a><a class="genanchor" href="#47685"> &para;</a><div class="date" title="2004-11-24 11:40"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47685">
<div class="phpcode"><code><span class="html">If you do not want to bind as unixadmin or *manager (i. e., for authentication on web applications), the following code could be useful:<br /><span class="default">&lt;?php<br /><br />$ldaphost </span><span class="keyword">= </span><span class="string">"ldap.yourdomain.com"</span><span class="keyword">;<br /><br /></span><span class="comment">/*for a SSL secured ldap_connect()<br /><br />$ldaphost = "ldap.yourdomain.com"; */<br /><br /></span><span class="default">$ldapport </span><span class="keyword">= </span><span class="default">389</span><span class="keyword">;<br /><br /></span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldaphost</span><span class="keyword">, </span><span class="default">$ldapport</span><span class="keyword">)<br />or die(</span><span class="string">"Could not connect to </span><span class="default">$ldaphost</span><span class="string">"</span><span class="keyword">);<br /><br />if (</span><span class="default">$ds</span><span class="keyword">) {<br /><br /></span><span class="default">$username </span><span class="keyword">= </span><span class="string">"some_user"</span><span class="keyword">;<br /></span><span class="default">$upasswd </span><span class="keyword">= </span><span class="string">"secret"</span><span class="keyword">;<br /></span><span class="default">$binddn </span><span class="keyword">= </span><span class="string">"uid=</span><span class="default">$username</span><span class="string">,ou=people,dc=yourdomain,dc=com"</span><span class="keyword">;<br /><br /></span><span class="default">$ldapbind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$binddn</span><span class="keyword">, </span><span class="default">$upasswd</span><span class="keyword">);<br />                            <br />if (</span><span class="default">$ldapbind</span><span class="keyword">) {<br /><br />print </span><span class="string">"Congratulations! </span><span class="default">$some_user</span><span class="string"> is authenticated."</span><span class="keyword">;}<br /><br />else {<br /><br />print </span><span class="string">"Nice try, kid. Better luck next time!"</span><span class="keyword">;}}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38640">  <div class="votes">
    <div id="Vu38640">
    <a href="/manual/vote-note.php?id=38640&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38640">
    <a href="/manual/vote-note.php?id=38640&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38640" title="50% like this...">
    0
    </div>
  </div>
  <a href="#38640" class="name">
  <strong class="user"><em>pete dot rowley at example dot com</em></strong></a><a class="genanchor" href="#38640"> &para;</a><div class="date" title="2003-12-31 08:51"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38640">
<div class="phpcode"><code><span class="html">You should NOT attempt to bind with a made up password.  However small the chance, the chance remains that your code produces a valid password.  The correct behaviour is to test for an empty password, and if your application will only service authenticated users, not perform any more LDAP operations on behalf of the user - this also happens to be more efficient.</span></code></div>
  </div>
 </div>
  <div class="note" id="27039">  <div class="votes">
    <div id="Vu27039">
    <a href="/manual/vote-note.php?id=27039&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27039">
    <a href="/manual/vote-note.php?id=27039&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27039" title="no votes...">
    0
    </div>
  </div>
  <a href="#27039" class="name">
  <strong class="user"><em>kokheng at jhs dot com dot sg</em></strong></a><a class="genanchor" href="#27039"> &para;</a><div class="date" title="2002-11-21 01:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27039">
<div class="phpcode"><code><span class="html">OpenLdap 2.1.x libraries support both LDAPv2 and LDAPv3. The problem lies with the slapd, the ldap server bundled with OpenLDAP.  It's default supported version is LDAPv3. One can set the "allow bind_v2" in the slapd.conf file, with this configured, the PHP ldap_set_option() is not required.</span></code></div>
  </div>
 </div>
  <div class="note" id="25555">  <div class="votes">
    <div id="Vu25555">
    <a href="/manual/vote-note.php?id=25555&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25555">
    <a href="/manual/vote-note.php?id=25555&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25555" title="no votes...">
    0
    </div>
  </div>
  <a href="#25555" class="name">
  <strong class="user"><em>elvisciousatrmci.net</em></strong></a><a class="genanchor" href="#25555"> &para;</a><div class="date" title="2002-09-27 11:08"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25555">
<div class="phpcode"><code><span class="html">I ran into a problem where I was getting a protocol error when I tried to bind.  I was able to connect fine and ldap commands worked fine from the command line.  <br /><br />The problem turned out to be that openldap (v 2.1.5) was starting up in version 3 ldap mode, and php (4.2.3) expected it to be in version 2 mode.<br /><br />To fix this use the ldap_set_option command to change the version that php expects.</span></code></div>
  </div>
 </div>
  <div class="note" id="68093">  <div class="votes">
    <div id="Vu68093">
    <a href="/manual/vote-note.php?id=68093&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68093">
    <a href="/manual/vote-note.php?id=68093&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68093" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#68093" class="name">
  <strong class="user"><em>romerom at cox dot net</em></strong></a><a class="genanchor" href="#68093"> &para;</a><div class="date" title="2006-07-12 02:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68093">
<div class="phpcode"><code><span class="html">I ran into an issue trying to bind as "cn=manager,dc=example,dc=com".  I took the example kenn posted where he set LDAP_OPT_PROTOCOL_VERSION to "3" for the connection.  Once I set this, I was able to bind with my manager id.</span></code></div>
  </div>
 </div>
  <div class="note" id="65547">  <div class="votes">
    <div id="Vu65547">
    <a href="/manual/vote-note.php?id=65547&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65547">
    <a href="/manual/vote-note.php?id=65547&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65547" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#65547" class="name">
  <strong class="user"><em>dedlfix</em></strong></a><a class="genanchor" href="#65547"> &para;</a><div class="date" title="2006-05-03 12:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65547">
<div class="phpcode"><code><span class="html">It doesn't make much sense to let die() the script in case of an error, otherwise to ask if there were no errors before proceeding the script, as the official examples do.<br /><br />better: <br /><br /><span class="default">&lt;?php<br />ldap_bind</span><span class="keyword">(...) or die(...);<br /></span><span class="default">do_something</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />or even better (die() is quick but dirty)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">ldap_bind</span><span class="keyword">(...)) {<br />  </span><span class="default">error</span><span class="keyword">();<br />} else {<br />  </span><span class="default">do_something</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43204">  <div class="votes">
    <div id="Vu43204">
    <a href="/manual/vote-note.php?id=43204&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43204">
    <a href="/manual/vote-note.php?id=43204&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43204" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#43204" class="name">
  <strong class="user"><em>kenn at pcintelligent dot com</em></strong></a><a class="genanchor" href="#43204"> &para;</a><div class="date" title="2004-06-13 11:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43204">
<div class="phpcode"><code><span class="html">I want to point out that the line that reads <br /><br />"$ldaprdn  = 'uname';"  <br /><br />is a bit confusing. You need to ensure that you use the entire rootdn. for instance. your code should look more like this...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// using ldap bind *** NOTE the uname *****<br /></span><span class="default">$ldaprdn  </span><span class="keyword">= </span><span class="string">'cn=root,dc=testserver,dc=com'</span><span class="keyword">;    </span><span class="comment">// ldap rdn or dn<br /></span><span class="default">$ldappass </span><span class="keyword">= </span><span class="string">'secret'</span><span class="keyword">;  </span><span class="comment">// associated password<br /><br />// connect to ldap server<br /></span><span class="default">$ldapconn </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">"ldap.testserver.com"</span><span class="keyword">)<br />   or die(</span><span class="string">"Could not connect to LDAP server."</span><span class="keyword">);<br /><br />if (</span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)) {<br />   echo </span><span class="string">"Using LDAPv3"</span><span class="keyword">;<br />} else {<br />   echo </span><span class="string">"Failed to set protocol version to 3"</span><span class="keyword">;<br />}<br /><br />if (</span><span class="default">$ldapconn</span><span class="keyword">) {<br /><br />   </span><span class="comment">// binding to ldap server<br />   </span><span class="default">$ldapbind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldapconn</span><span class="keyword">, </span><span class="default">$ldaprdn</span><span class="keyword">, </span><span class="default">$ldappass</span><span class="keyword">);<br /><br />   </span><span class="comment">// verify binding<br />   </span><span class="keyword">if (</span><span class="default">$ldapbind</span><span class="keyword">) {<br />       echo </span><span class="string">"LDAP bind successful..."</span><span class="keyword">;<br />   } else {<br />       echo </span><span class="string">"LDAP bind failed..."</span><span class="keyword">;<br />   }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56105">  <div class="votes">
    <div id="Vu56105">
    <a href="/manual/vote-note.php?id=56105&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56105">
    <a href="/manual/vote-note.php?id=56105&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56105" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#56105" class="name">
  <strong class="user"><em>get_your_gun at hotmail dot com</em></strong></a><a class="genanchor" href="#56105"> &para;</a><div class="date" title="2005-08-23 11:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56105">
<div class="phpcode"><code><span class="html">Hey<br /><br />I was trying this all day and final noticed that when you use bind and authenticate. The user name needs to be as follows for it to work. I am using PHP V 4.03 so this might be different now but here is what I used and the auth worked.<br /><br /><span class="default">&lt;?php<br />$ldaphost </span><span class="keyword">= </span><span class="string">"ldap.what.at.greatnet.com"</span><span class="keyword">;<br /></span><span class="default">$ldapport </span><span class="keyword">= </span><span class="default">389</span><span class="keyword">;<br /><br /></span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldaphost</span><span class="keyword">, </span><span class="default">$ldapport</span><span class="keyword">)<br />or die(</span><span class="string">"Could not connect to </span><span class="default">$ldaphost</span><span class="string">"</span><span class="keyword">);<br /><br />if (</span><span class="default">$ds</span><span class="keyword">) <br />{<br />    </span><span class="default">$username </span><span class="keyword">= </span><span class="string">"johndoe@what.at.greatnet.com"</span><span class="keyword">;<br />    </span><span class="default">$upasswd </span><span class="keyword">= </span><span class="string">"pass"</span><span class="keyword">;<br /><br />    </span><span class="default">$ldapbind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$upasswd</span><span class="keyword">);<br />                               <br />    if (</span><span class="default">$ldapbind</span><span class="keyword">) <br />        {print </span><span class="string">"Congratulations! </span><span class="default">$username</span><span class="string"> is authenticated."</span><span class="keyword">;}<br />    else <br />        {print </span><span class="string">"Nice try, kid. Better luck next time!"</span><span class="keyword">;}<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124188">  <div class="votes">
    <div id="Vu124188">
    <a href="/manual/vote-note.php?id=124188&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124188">
    <a href="/manual/vote-note.php?id=124188&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124188" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#124188" class="name">
  <strong class="user"><em>Victor</em></strong></a><a class="genanchor" href="#124188"> &para;</a><div class="date" title="2019-09-11 10:42"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124188">
<div class="phpcode"><code><span class="html">(Correction)<br />ldap_bind does return TRUE if the password is expired or needs to be reset, use ldap_get_option if ldap_bind returns FALSE<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">"EXPIRED_PASSWORD"</span><span class="keyword">, </span><span class="default">532</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"PASSWORD_RESET"</span><span class="keyword">, </span><span class="default">773</span><span class="keyword">);<br /><br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">'ldap://active.directory.server/'</span><span class="keyword">);<br /></span><span class="default">$bind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'expiredpass'</span><span class="keyword">);<br /><br />if (!</span><span class="default">$bind</span><span class="keyword">) {<br />    if (</span><span class="default">ldap_get_option</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">LDAP_OPT_DIAGNOSTIC_MESSAGE</span><span class="keyword">, </span><span class="default">$extended_error</span><span class="keyword">)) {<br />            </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">$extended_error</span><span class="keyword">)[</span><span class="default">2</span><span class="keyword">];<br />            </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">)[</span><span class="default">2</span><span class="keyword">];<br />            </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">);<br /><br />            if (</span><span class="default">$errno </span><span class="keyword">=== </span><span class="default">EXPIRED_PASSWORD</span><span class="keyword">) {<br />                </span><span class="default">$err </span><span class="keyword">= </span><span class="string">'Unable to login: Password expired'</span><span class="keyword">;<br />            } else if (</span><span class="default">$errno </span><span class="keyword">=== </span><span class="default">PASSWORD_RESET</span><span class="keyword">) {<br />                </span><span class="default">$err </span><span class="keyword">= </span><span class="string">'Unable to login: Password needs to be reset'</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$err </span><span class="keyword">= </span><span class="default">$extended_error</span><span class="keyword">;<br />            }<br />            if (</span><span class="default">$errno </span><span class="keyword">=== </span><span class="default">EXPIRED_PASSWORD </span><span class="keyword">|| </span><span class="default">$errno </span><span class="keyword">=== </span><span class="default">PASSWORD_RESET</span><span class="keyword">) {<br />               </span><span class="comment">#Change password<br />            </span><span class="keyword">}<br />        }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88046">  <div class="votes">
    <div id="Vu88046">
    <a href="/manual/vote-note.php?id=88046&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88046">
    <a href="/manual/vote-note.php?id=88046&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88046" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#88046" class="name">
  <strong class="user"><em>juan[dot]pineda[at]resultstel.com</em></strong></a><a class="genanchor" href="#88046"> &para;</a><div class="date" title="2009-01-07 08:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88046">
<div class="phpcode"><code><span class="html">Active Directory doesn't accept anonymous requests anymore.<br /><br />With Windows Server 2003, only authenticated users may initiate an LDAP request against Windows Server 2003-based domain controllers. You can override this new default behavior by changing the seventh character of the dsHeuristics attribute on the DN path as follows: <br />CN=Directory Service,CN=Windows NT,CN=Services,CN=Configuration,Root domain in forest<br /><br />from: <a href="http://support.microsoft.com/kb/326690" rel="nofollow" target="_blank">http://support.microsoft.com/kb/326690</a></span></code></div>
  </div>
 </div>
  <div class="note" id="76562">  <div class="votes">
    <div id="Vu76562">
    <a href="/manual/vote-note.php?id=76562&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76562">
    <a href="/manual/vote-note.php?id=76562&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76562" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#76562" class="name">
  <strong class="user"><em>Josh A.</em></strong></a><a class="genanchor" href="#76562"> &para;</a><div class="date" title="2007-07-20 07:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76562">
<div class="phpcode"><code><span class="html">The OpenLDAP libraries will return error 53 (Server unwilling to perform) when trying to re-bind to a non-anonymous account if you accidentally leave the password field blank. If you want to authenticate against a different field than the dn, you have to bind to the server twice. Your code may look like the following:<br /><br />&lt;?<br />function ldapLogin($uname, $pass, $base_dn, $fname, $server, $port){<br />    $ldc=@ldap_connect($server, $port);<br />    if (!$ldc) return ERROR_CODE;<br />    <br />    $bn='cn=anonymous-user,'.$base_dn;<br />    $pw='anonymous-pass';<br />    $lbind=@ldap_bind($ldc, $bn, $pw);<br />    if (!$lbind) return ERROR_CODE;<br />    <br />    <br />    $ureturn=@ldap_search($ldc, $base_dn, "($fname=$uname)", array('dn', 'givenName', 'sn', 'mail'));<br />    <br />    <br />    $uent=@ldap_first_entry($ldc, $ureturn);<br />    if (!$uent) return ERROR_CODE;<br />    <br />    $bn=@ldap_get_dn($ldc, $uent);<br />    <br />    //This line should use $pass rather than $password<br />    $lbind=@ldap_bind($ldc, $bn, $password);<br />    // Now you can find the error<br />    echo ldap_error($ltc);<br /><br />    if ($lbind) return true; else return false;<br />?&gt;<br /><br />Hope this helps someone else running in to the same error.</span></code></div>
  </div>
 </div>
  <div class="note" id="74189">  <div class="votes">
    <div id="Vu74189">
    <a href="/manual/vote-note.php?id=74189&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74189">
    <a href="/manual/vote-note.php?id=74189&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74189" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#74189" class="name">
  <strong class="user"><em>Teemu</em></strong></a><a class="genanchor" href="#74189"> &para;</a><div class="date" title="2007-03-29 12:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74189">
<div class="phpcode"><code><span class="html">Example of connecting and searching AD<br /><br />$con = ldap_connect('ad.domain.com');<br />ldap_set_option($con, LDAP_OPT_PROTOCOL_VERSION, 3);<br />ldap_set_option($con, LDAP_OPT_REFERRALS, 0);<br />ldap_bind($con, 'user@DOMAIN.COM', 'clear password');<br /><br />ldap_search($con, 'DC=domain,DC=com', '(uniqueMember=user)');</span></code></div>
  </div>
 </div>
  <div class="note" id="98351">  <div class="votes">
    <div id="Vu98351">
    <a href="/manual/vote-note.php?id=98351&amp;page=function.ldap-bind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98351">
    <a href="/manual/vote-note.php?id=98351&amp;page=function.ldap-bind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98351" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#98351" class="name">
  <strong class="user"><em>[nie ten]archie</em></strong></a><a class="genanchor" href="#98351"> &para;</a><div class="date" title="2010-06-10 04:48"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98351">
<div class="phpcode"><code><span class="html">I'm using OpenLDAP on linux and found out the right bind sequence the hard way... so I'm sharing it with you:<br /><br />(wkaiser solution is ok if everything works fine, but for development I would suggest using ldap_error command like this)<br /><br /><span class="default">&lt;?php<br />$ldapconfig</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">] = </span><span class="string">'10.10.10.10'</span><span class="keyword">;<br /></span><span class="default">$ldapconfig</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;<br /></span><span class="default">$ldapconfig</span><span class="keyword">[</span><span class="string">'basedn'</span><span class="keyword">] = </span><span class="string">'dc=company,dc=com'</span><span class="keyword">;<br /><br /></span><span class="default">$ds</span><span class="keyword">=</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldapconfig</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], </span><span class="default">$ldapconfig</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]);<br /><br /></span><span class="default">$dn</span><span class="keyword">=</span><span class="string">"uid="</span><span class="keyword">.</span><span class="default">$username</span><span class="keyword">.</span><span class="string">",ou=people,"</span><span class="keyword">.</span><span class="default">$ldapconfig</span><span class="keyword">[</span><span class="string">'basedn'</span><span class="keyword">];<br /><br />if (</span><span class="default">$bind</span><span class="keyword">=</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">)) {<br />  echo(</span><span class="string">"Login correct"</span><span class="keyword">);<br />} else {<br /><br />  echo(</span><span class="string">"Unable to bind to server.&lt;/br&gt;"</span><span class="keyword">);<br /><br />  echo(</span><span class="string">"msg:'"</span><span class="keyword">.</span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">).</span><span class="string">"'&lt;/br&gt;"</span><span class="keyword">);</span><span class="comment">#check if the message isn't: Can't contact LDAP server :)<br />  #if it say something about a cn or user then you are trying with the wrong $dn pattern i found this by looking at OpenLDAP source code :)<br />  #we can figure out the right pattern by searching the user tree<br />  #remember to turn on the anonymous search on the ldap server<br />  </span><span class="keyword">if (</span><span class="default">$bind</span><span class="keyword">=</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">)) {<br /><br />    </span><span class="default">$filter </span><span class="keyword">= </span><span class="string">"(cn=*)"</span><span class="keyword">;<br /><br />    if (!(</span><span class="default">$search</span><span class="keyword">=@</span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$ldapconfig</span><span class="keyword">[</span><span class="string">'basedn'</span><span class="keyword">], </span><span class="default">$filter</span><span class="keyword">))) {<br />      echo(</span><span class="string">"Unable to search ldap server&lt;br&gt;"</span><span class="keyword">);<br />      echo(</span><span class="string">"msg:'"</span><span class="keyword">.</span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">).</span><span class="string">"'&lt;/br&gt;"</span><span class="keyword">);</span><span class="comment">#check the message again<br />    </span><span class="keyword">} else {<br />      </span><span class="default">$number_returned </span><span class="keyword">= </span><span class="default">ldap_count_entries</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">,</span><span class="default">$search</span><span class="keyword">);<br />      </span><span class="default">$info </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$search</span><span class="keyword">);<br />      echo </span><span class="string">"The number of entries returned is "</span><span class="keyword">. </span><span class="default">$number_returned</span><span class="keyword">.</span><span class="string">"&lt;p&gt;"</span><span class="keyword">;<br />      for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$info</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++) {<br /><br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);</span><span class="comment">#look for your user account in this pile of junk and apply the whole pattern where you build $dn to match exactly the ldap tree entry<br />      </span><span class="keyword">}<br />    }<br />  } else {<br />    echo(</span><span class="string">"Unable to bind anonymously&lt;br&gt;"</span><span class="keyword">);<br />    echo(</span><span class="string">"msg:"</span><span class="keyword">.</span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />as you can see most of the examples use "cn=username" and OpenLDAP uses "uid=username" but who knows what will be used in the future builds, this code will help you check it out (I hope :)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-bind&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-bind.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ldap.php">LDAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ldap-8859-to-t61.php" title="ldap_&#8203;8859_&#8203;to_&#8203;t61">ldap_&#8203;8859_&#8203;to_&#8203;t61</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add.php" title="ldap_&#8203;add">ldap_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add-ext.php" title="ldap_&#8203;add_&#8203;ext">ldap_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="current">
                            <a href="function.ldap-bind.php" title="ldap_&#8203;bind">ldap_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind-ext.php" title="ldap_&#8203;bind_&#8203;ext">ldap_&#8203;bind_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-close.php" title="ldap_&#8203;close">ldap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-compare.php" title="ldap_&#8203;compare">ldap_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect.php" title="ldap_&#8203;connect">ldap_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect-wallet.php" title="ldap_&#8203;connect_&#8203;wallet">ldap_&#8203;connect_&#8203;wallet</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-entries.php" title="ldap_&#8203;count_&#8203;entries">ldap_&#8203;count_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-references.php" title="ldap_&#8203;count_&#8203;references">ldap_&#8203;count_&#8203;references</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete.php" title="ldap_&#8203;delete">ldap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete-ext.php" title="ldap_&#8203;delete_&#8203;ext">ldap_&#8203;delete_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-dn2ufn.php" title="ldap_&#8203;dn2ufn">ldap_&#8203;dn2ufn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-err2str.php" title="ldap_&#8203;err2str">ldap_&#8203;err2str</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-errno.php" title="ldap_&#8203;errno">ldap_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-error.php" title="ldap_&#8203;error">ldap_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-escape.php" title="ldap_&#8203;escape">ldap_&#8203;escape</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop.php" title="ldap_&#8203;exop">ldap_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-passwd.php" title="ldap_&#8203;exop_&#8203;passwd">ldap_&#8203;exop_&#8203;passwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-refresh.php" title="ldap_&#8203;exop_&#8203;refresh">ldap_&#8203;exop_&#8203;refresh</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-sync.php" title="ldap_&#8203;exop_&#8203;sync">ldap_&#8203;exop_&#8203;sync</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-whoami.php" title="ldap_&#8203;exop_&#8203;whoami">ldap_&#8203;exop_&#8203;whoami</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-explode-dn.php" title="ldap_&#8203;explode_&#8203;dn">ldap_&#8203;explode_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-attribute.php" title="ldap_&#8203;first_&#8203;attribute">ldap_&#8203;first_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-entry.php" title="ldap_&#8203;first_&#8203;entry">ldap_&#8203;first_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-reference.php" title="ldap_&#8203;first_&#8203;reference">ldap_&#8203;first_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-free-result.php" title="ldap_&#8203;free_&#8203;result">ldap_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-attributes.php" title="ldap_&#8203;get_&#8203;attributes">ldap_&#8203;get_&#8203;attributes</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-dn.php" title="ldap_&#8203;get_&#8203;dn">ldap_&#8203;get_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-entries.php" title="ldap_&#8203;get_&#8203;entries">ldap_&#8203;get_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-option.php" title="ldap_&#8203;get_&#8203;option">ldap_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values.php" title="ldap_&#8203;get_&#8203;values">ldap_&#8203;get_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values-len.php" title="ldap_&#8203;get_&#8203;values_&#8203;len">ldap_&#8203;get_&#8203;values_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-list.php" title="ldap_&#8203;list">ldap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-add.php" title="ldap_&#8203;mod_&#8203;add">ldap_&#8203;mod_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_add-ext.php" title="ldap_&#8203;mod_&#8203;add_&#8203;ext">ldap_&#8203;mod_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-del.php" title="ldap_&#8203;mod_&#8203;del">ldap_&#8203;mod_&#8203;del</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_del-ext.php" title="ldap_&#8203;mod_&#8203;del_&#8203;ext">ldap_&#8203;mod_&#8203;del_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-replace.php" title="ldap_&#8203;mod_&#8203;replace">ldap_&#8203;mod_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_replace-ext.php" title="ldap_&#8203;mod_&#8203;replace_&#8203;ext">ldap_&#8203;mod_&#8203;replace_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify.php" title="ldap_&#8203;modify">ldap_&#8203;modify</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify-batch.php" title="ldap_&#8203;modify_&#8203;batch">ldap_&#8203;modify_&#8203;batch</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-attribute.php" title="ldap_&#8203;next_&#8203;attribute">ldap_&#8203;next_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-entry.php" title="ldap_&#8203;next_&#8203;entry">ldap_&#8203;next_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-reference.php" title="ldap_&#8203;next_&#8203;reference">ldap_&#8203;next_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-exop.php" title="ldap_&#8203;parse_&#8203;exop">ldap_&#8203;parse_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-reference.php" title="ldap_&#8203;parse_&#8203;reference">ldap_&#8203;parse_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-result.php" title="ldap_&#8203;parse_&#8203;result">ldap_&#8203;parse_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-read.php" title="ldap_&#8203;read">ldap_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename.php" title="ldap_&#8203;rename">ldap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename-ext.php" title="ldap_&#8203;rename_&#8203;ext">ldap_&#8203;rename_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sasl-bind.php" title="ldap_&#8203;sasl_&#8203;bind">ldap_&#8203;sasl_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-search.php" title="ldap_&#8203;search">ldap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-option.php" title="ldap_&#8203;set_&#8203;option">ldap_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-rebind-proc.php" title="ldap_&#8203;set_&#8203;rebind_&#8203;proc">ldap_&#8203;set_&#8203;rebind_&#8203;proc</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sort.php" title="ldap_&#8203;sort">ldap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-start-tls.php" title="ldap_&#8203;start_&#8203;tls">ldap_&#8203;start_&#8203;tls</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-t61-to-8859.php" title="ldap_&#8203;t61_&#8203;to_&#8203;8859">ldap_&#8203;t61_&#8203;to_&#8203;8859</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-unbind.php" title="ldap_&#8203;unbind">ldap_&#8203;unbind</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.ldap-control-paged-result.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result">ldap_&#8203;control_&#8203;paged_&#8203;result</a>
                    </li>
                                    <li class="">
                        <a href="function.ldap-control-paged-result-response.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response">ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response</a>
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
