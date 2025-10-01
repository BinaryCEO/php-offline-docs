<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OAuthProvider::checkOAuthRequest - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/oauthprovider.checkoauthrequest.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oauthprovider.checkoauthrequest.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oauthprovider.checkoauthrequest.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.oauthprovider.php">
 <link rel="prev" href="https://www.php.net/manual/en/oauthprovider.calltokenhandler.php">
 <link rel="next" href="https://www.php.net/manual/en/oauthprovider.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oauthprovider.checkoauthrequest.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oauthprovider.checkoauthrequest.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oauthprovider.checkoauthrequest.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oauthprovider.checkoauthrequest.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oauthprovider.checkoauthrequest.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oauthprovider.checkoauthrequest.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oauthprovider.checkoauthrequest.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oauthprovider.checkoauthrequest.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oauthprovider.checkoauthrequest.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oauthprovider.checkoauthrequest.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oauthprovider.checkoauthrequest.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Check an oauth request" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OAuthProvider::checkOAuthRequest - Manual" />
<meta name="twitter:description" content="Check an oauth request" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OAuthProvider::checkOAuthRequest - Manual" />
<meta itemprop="description" content="Check an oauth request" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Check an oauth request" />

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
        <a href="oauthprovider.construct.php">
          OAuthProvider::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oauthprovider.calltokenhandler.php">
          &laquo; OAuthProvider::calltokenHandler        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.oauth.php'>OAuth</a></li>      <li><a href='class.oauthprovider.php'>OAuthProvider</a></li>      </ul>
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
            <option value='en/oauthprovider.checkoauthrequest.php' selected="selected">English</option>
            <option value='de/oauthprovider.checkoauthrequest.php'>German</option>
            <option value='es/oauthprovider.checkoauthrequest.php'>Spanish</option>
            <option value='fr/oauthprovider.checkoauthrequest.php'>French</option>
            <option value='it/oauthprovider.checkoauthrequest.php'>Italian</option>
            <option value='ja/oauthprovider.checkoauthrequest.php'>Japanese</option>
            <option value='pt_BR/oauthprovider.checkoauthrequest.php'>Brazilian Portuguese</option>
            <option value='ru/oauthprovider.checkoauthrequest.php'>Russian</option>
            <option value='tr/oauthprovider.checkoauthrequest.php'>Turkish</option>
            <option value='uk/oauthprovider.checkoauthrequest.php'>Ukrainian</option>
            <option value='zh/oauthprovider.checkoauthrequest.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oauthprovider.checkoauthrequest" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">OAuthProvider::checkOAuthRequest</h1>
  <p class="verinfo">(PECL OAuth &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">OAuthProvider::checkOAuthRequest</span> &mdash; <span class="dc-title">Check an oauth request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-oauthprovider.checkoauthrequest-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>OAuthProvider::checkOAuthRequest</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$uri</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$method</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Checks an OAuth request.
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-oauthprovider.checkoauthrequest-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">uri</code></dt>
    <dd>
     <p class="para">
      The optional <abbr title="Uniform Resource Identifier">URI</abbr>, or endpoint.
     </p>
    </dd>
   
   
    <dt><code class="parameter">method</code></dt>
    <dd>
     <p class="para">
      The <abbr title="Hypertext Transfer Protocol">HTTP</abbr> method. Optionally pass in one of the
      <strong><code><a href="oauth.constants.php#constant.oauth-http-method-get">OAUTH_HTTP_METHOD_<span class="replaceable">*</span></a></code></strong> OAuth constants.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-oauthprovider.checkoauthrequest-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-oauthprovider.checkoauthrequest-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Emits an <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong> level error if
   the HTTP method cannot be detected.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-oauthprovider.checkoauthrequest-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="oauthprovider.reportproblem.php" class="methodname" rel="rdfs-seeAlso">OAuthProvider::reportProblem()</a> - Report a problem</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oauth/oauthprovider/checkoauthrequest.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foauthprovider.checkoauthrequest%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oauthprovider.checkoauthrequest&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oauthprovider.checkoauthrequest.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99537">  <div class="votes">
    <div id="Vu99537">
    <a href="/manual/vote-note.php?id=99537&amp;page=oauthprovider.checkoauthrequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99537">
    <a href="/manual/vote-note.php?id=99537&amp;page=oauthprovider.checkoauthrequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99537" title="92% like this...">
    11
    </div>
  </div>
  <a href="#99537" class="name">
  <strong class="user"><em>Lyuben Penkovski (l_penkovski at yahoo dot com)</em></strong></a><a class="genanchor" href="#99537"> &para;</a><div class="date" title="2010-08-23 03:59"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99537">
<div class="phpcode"><code><span class="html">This function checks if OAuth request is valid and signed correctly.<br /><br />$provider-&gt;checkOAuthRequest(); <br /><br />It does this by first calling timestampNonceHandler and expects result OAUHT_OK from it. If the result is different, an exception is thrown. It's up to you to write the code that checks timestamp/nonce combinations.<br /><br />Secondly, it calls consumerHandler and expects your code in the consumerHandler function to set $provider-&gt;consumer_secret to the correct value (you should take it from your consumer storage location where it's saved with consumer key). If $provider-&gt;consumer_secret is not set, or is not set with the proper value an exception is thrown. Proper value means that it should be the same consumer key that was used to sign the request by the consumer before sending it to here (the provider). Again expected result from this function is OAUTH_OK or some OAUTH error code if you want to throw exception.<br /><br />Third, it calls tokenHandler, but only WHEN you are requesting ACCESS token or requesting protected data with authorized ACCESS TOKEN. In order for the provider to call tokenHandler, before a call to the checkOAuthRequest function is made, the provider should call the method that says that this is not a request token endpoint (this is access token endpoint):<br /><br />$provider-&gt;isRequestTokenEndpoint (false);<br />$provider-&gt;checkOAuthRequest();<br /><br />Again here OAuthProvider is expecting your code in the tokenHandler to set $provider-&gt;token_secret to the correct value (you should take it from your token storage place) because during the signing process it uses CONSUMER SECRET (for request token) and CONSUMER SECRET AND TOKEN SECRET (for access token and fetch of protected data) to sign the request.<br /><br />After these 3 handler functions are called and return good results (OAUTH_OK) and set the values of the required fields $provider-&gt;consumer_secret and $provider-&gt;token_secret, then the checkOAuthRequest function signs the request. If something goes wrong, it throws exception, otherwise there comes the place for your code to proceed and handle the request:<br /><br />- you can create request token (if it's a first request for request token)<br />- you can create access token (if it's a request for access token)<br />- you can return protected data to the consumer (if it's a request to fetch protected data)<br /><br />This is how the functions in my code look like, however please have in mind that I've just implemented it and it's possible that I have something missed or forgotten, but generally I think the idea should be clear:<br /><br />$this-&gt;dbModel is the object for working with database and save/retrieve token and consumer data<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public function </span><span class="default">timestampNonceHandler </span><span class="keyword">( </span><span class="default">$provider </span><span class="keyword">)<br />{<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dbModel</span><span class="keyword">-&gt;</span><span class="default">checkTimestampNonce </span><span class="keyword">( </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">consumer_key</span><span class="keyword">,<br />                                                 </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">token</span><span class="keyword">, <br />                                                 </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">timestamp</span><span class="keyword">,<br />                                                 </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">nonce </span><span class="keyword">);<br />}<br /><br />public function </span><span class="default">consumerHandler </span><span class="keyword">( </span><span class="default">$provider </span><span class="keyword">)<br />{<br />    </span><span class="default">$consumer </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dbModel</span><span class="keyword">-&gt;</span><span class="default">getConsumerSecrets </span><span class="keyword">(</span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">consumer_key</span><span class="keyword">);<br />    <br />    if(</span><span class="default">$consumer</span><span class="keyword">[</span><span class="string">'consumer_key'</span><span class="keyword">] != </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">consumer_key</span><span class="keyword">)<br />    {<br />        return </span><span class="default">OAUTH_CONSUMER_KEY_UNKNOWN</span><span class="keyword">;<br />    }<br />    <br />    if( (int)</span><span class="default">$consumer</span><span class="keyword">[</span><span class="string">'disabled'</span><span class="keyword">] != </span><span class="default">0 </span><span class="keyword">)<br />    {<br />        return </span><span class="default">OAUTH_CONSUMER_KEY_REFUSED</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">consumer_id </span><span class="keyword">= </span><span class="default">$consumer</span><span class="keyword">[</span><span class="string">'consumer_id'</span><span class="keyword">]; </span><span class="comment"># this is not required by OAuthProvider but I use it later in tokenHandler<br />    </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">consumer_secret </span><span class="keyword">= </span><span class="default">$consumer</span><span class="keyword">[</span><span class="string">'consumer_secret'</span><span class="keyword">]; </span><span class="comment"># this is REQUIRED<br /><br />    </span><span class="keyword">return </span><span class="default">OAUTH_OK</span><span class="keyword">;<br />}<br /><br />public function </span><span class="default">tokenHandler </span><span class="keyword">( </span><span class="default">$provider </span><span class="keyword">)<br />{<br />    </span><span class="default">$token </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dbModel</span><span class="keyword">-&gt;</span><span class="default">getToken</span><span class="keyword">( </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">token </span><span class="keyword">);<br /><br />    if( </span><span class="default">time</span><span class="keyword">() &gt; </span><span class="default">$token</span><span class="keyword">[</span><span class="string">'expire'</span><span class="keyword">] )<br />    {<br />        return </span><span class="default">OAUTH_TOKEN_EXPIRED</span><span class="keyword">;<br />    }<br />    <br />    if(</span><span class="default">$token</span><span class="keyword">[</span><span class="string">'consumer_id'</span><span class="keyword">] != </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">consumer_id</span><span class="keyword">)<br />    {<br />        return </span><span class="default">OAUTH_TOKEN_REJECTED</span><span class="keyword">;<br />    }<br /><br />    if( (int)</span><span class="default">$token</span><span class="keyword">[</span><span class="string">'authorized'</span><span class="keyword">] == </span><span class="default">0 </span><span class="keyword">)<br />    {<br />        return </span><span class="default">OAUTH_TOKEN_REJECTED</span><span class="keyword">;<br />    }<br /><br />    if(</span><span class="default">$token</span><span class="keyword">[</span><span class="string">'token_type'</span><span class="keyword">] != </span><span class="string">'access'</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$token</span><span class="keyword">[</span><span class="string">'verifier'</span><span class="keyword">] != </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">verifier</span><span class="keyword">)<br />            return </span><span class="default">OAUTH_VERIFIER_INVALID</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">token_id </span><span class="keyword">= </span><span class="default">$token</span><span class="keyword">[</span><span class="string">'token_id'</span><span class="keyword">]; </span><span class="comment"># not required to be set by OAuthProvider<br />    </span><span class="default">$provider</span><span class="keyword">-&gt;</span><span class="default">token_secret </span><span class="keyword">= </span><span class="default">$token</span><span class="keyword">[</span><span class="string">'token_secret'</span><span class="keyword">]; </span><span class="comment"># this is REQUIRED<br />    <br />    </span><span class="keyword">return </span><span class="default">OAUTH_OK</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113478">  <div class="votes">
    <div id="Vu113478">
    <a href="/manual/vote-note.php?id=113478&amp;page=oauthprovider.checkoauthrequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113478">
    <a href="/manual/vote-note.php?id=113478&amp;page=oauthprovider.checkoauthrequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113478" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#113478" class="name">
  <strong class="user"><em>tim at timlytle dot net</em></strong></a><a class="genanchor" href="#113478"> &para;</a><div class="date" title="2013-10-17 01:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113478">
<div class="phpcode"><code><span class="html">Seems this method can only be called once per instance (or gives the same result as the first call on repeat calls). <br /><br />My use case is API endpoints that can be accessed by a user or with 2 legged auth. If normal oAuth failed, I was calling is2LeggedEndpoint(true) and running again. <br /><br />For that to work the OAuth Provider needs to be created again, simply changing one of the flags seems to have no effect on the next call.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=oauthprovider.checkoauthrequest&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oauthprovider.checkoauthrequest.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.oauthprovider.php">OAuthProvider</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oauthprovider.addrequiredparameter.php" title="addRequiredParameter">addRequiredParameter</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.callconsumerhandler.php" title="callconsumerHandler">callconsumerHandler</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.calltimestampnoncehandler.php" title="callTimestampNonceHandler">callTimestampNonceHandler</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.calltokenhandler.php" title="calltokenHandler">calltokenHandler</a>
                        </li>
                                                <li class="current">
                            <a href="oauthprovider.checkoauthrequest.php" title="checkOAuthRequest">checkOAuthRequest</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.consumerhandler.php" title="consumerHandler">consumerHandler</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.generatetoken.php" title="generateToken">generateToken</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.is2leggedendpoint.php" title="is2LeggedEndpoint">is2LeggedEndpoint</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.isrequesttokenendpoint.php" title="isRequestTokenEndpoint">isRequestTokenEndpoint</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.removerequiredparameter.php" title="removeRequiredParameter">removeRequiredParameter</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.reportproblem.php" title="reportProblem">reportProblem</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.setparam.php" title="setParam">setParam</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.setrequesttokenpath.php" title="setRequestTokenPath">setRequestTokenPath</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.timestampnoncehandler.php" title="timestampNonceHandler">timestampNonceHandler</a>
                        </li>
                                                <li class="">
                            <a href="oauthprovider.tokenhandler.php" title="tokenHandler">tokenHandler</a>
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
