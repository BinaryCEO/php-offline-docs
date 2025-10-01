<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Encryption Filters - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/filters.encryption.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/filters.encryption.php">
 <link rel="alternate" href="https://www.php.net/manual/en/filters.encryption.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/filters.php">
 <link rel="prev" href="https://www.php.net/manual/en/filters.compression.php">
 <link rel="next" href="https://www.php.net/manual/en/transports.php">

 <link rel="alternate" href="https://www.php.net/manual/en/filters.encryption.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/filters.encryption.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/filters.encryption.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/filters.encryption.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/filters.encryption.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/filters.encryption.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/filters.encryption.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/filters.encryption.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/filters.encryption.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/filters.encryption.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/filters.encryption.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Encryption Filters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Encryption Filters - Manual" />
<meta name="twitter:description" content="Encryption Filters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Encryption Filters - Manual" />
<meta itemprop="description" content="Encryption Filters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Encryption Filters" />

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
        <a href="transports.php">
          List of Supported Socket Transports &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="filters.compression.php">
          &laquo; Compression Filters        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='filters.php'>List of Available Filters</a></li>      </ul>
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
            <option value='en/filters.encryption.php' selected="selected">English</option>
            <option value='de/filters.encryption.php'>German</option>
            <option value='es/filters.encryption.php'>Spanish</option>
            <option value='fr/filters.encryption.php'>French</option>
            <option value='it/filters.encryption.php'>Italian</option>
            <option value='ja/filters.encryption.php'>Japanese</option>
            <option value='pt_BR/filters.encryption.php'>Brazilian Portuguese</option>
            <option value='ru/filters.encryption.php'>Russian</option>
            <option value='tr/filters.encryption.php'>Turkish</option>
            <option value='uk/filters.encryption.php'>Ukrainian</option>
            <option value='zh/filters.encryption.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="filters.encryption" class="section">
  <h2 class="title">Encryption Filters</h2>

  <p class="para">
    Encryption filters are especially useful for file/stream encryption.
  </p>

  <div class="section" id="filters.encryption.mcrypt">
   <h2 class="title">mcrypt.* and mdecrypt.*</h2>
   <p class="para">
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 7.1.0. Relying on this feature
is highly discouraged.</p></div>
   </p>

   <p class="simpara">
    <code class="literal">mcrypt.*</code> and <code class="literal">mdecrypt.*</code>
    provide symmetric encryption and decryption using libmcrypt.
    Both sets of filters support the same algorithms available to
    <a href="ref.mcrypt.php" class="link">mcrypt extension</a> in the form of
    <code class="literal">mcrypt.ciphername</code> where <code class="parameter">ciphername</code>
    is the name of the cipher as it would be passed to
    <span class="function"><a href="function.mcrypt-module-open.php" class="function">mcrypt_module_open()</a></span>.
    The following five filter parameters are also available:
   </p>

   <p class="para">
    <table class="doctable table">
     <caption><strong>mcrypt filter parameters</strong></caption>
     
      <thead>
       <tr>
        <th>Parameter</th>
        <th>Required?</th>
        <th>Default</th>
        <th>Sample Values</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td>mode</td>
        <td>Optional</td>
        <td>cbc</td>
        <td>cbc, cfb, ecb, nofb, ofb, stream</td>
       </tr>

       <tr>
        <td>algorithms_dir</td>
        <td>Optional</td>
        <td>ini_get(&#039;mcrypt.algorithms_dir&#039;)</td>
        <td>Location of algorithms modules</td>
       </tr>

       <tr>
        <td>modes_dir</td>
        <td>Optional</td>
        <td>ini_get(&#039;mcrypt.modes_dir&#039;)</td>
        <td>Location of modes modules</td>
       </tr>

       <tr>
        <td>iv</td>
        <td>Required</td>
        <td>N/A</td>
        <td>Typically 8, 16, or 32 bytes of binary data.  Depends on cipher</td>
       </tr>

       <tr>
        <td>key</td>
        <td>Required</td>
        <td>N/A</td>
        <td>Typically 8, 16, or 32 bytes of binary data.  Depends on cipher</td>
       </tr>

      </tbody>
     
    </table>

   </p>

   <div class="example" id="example-5961">
    <p><strong>Example #1 Encrypt/Decrypt with Blowfish</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//$key assumed to be previously generated<br /></span><span style="color: #0000BB">$iv_size </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_BLOWFISH</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$iv </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_DEV_URANDOM</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'encrypted-file.enc'</span><span style="color: #007700">, </span><span style="color: #DD0000">'wb'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'mode'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'cbc'</span><span style="color: #007700">,</span><span style="color: #DD0000">'iv'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">, </span><span style="color: #DD0000">'key'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">stream_filter_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">'mcrypt.blowfish'</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_FILTER_WRITE</span><span style="color: #007700">, </span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">'message to encrypt'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//decrypt...<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'encrypted-file.enc'</span><span style="color: #007700">, </span><span style="color: #DD0000">'rb'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$iv </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv_size </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_BLOWFISH</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'mode'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'cbc'</span><span style="color: #007700">,</span><span style="color: #DD0000">'iv'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">, </span><span style="color: #DD0000">'key'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">stream_filter_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">'mdecrypt.blowfish'</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_FILTER_READ</span><span style="color: #007700">, </span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">));</span><span style="color: #FF8000">//trims off null padding<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-5962">
    <p><strong>Example #2 Encrypt file using AES-128 CBC with SHA256 HMAC</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />AES_CBC</span><span style="color: #007700">::</span><span style="color: #0000BB">encryptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #DD0000">"plaintext.txt"</span><span style="color: #007700">, </span><span style="color: #DD0000">"encrypted.enc"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">AES_CBC</span><span style="color: #007700">::</span><span style="color: #0000BB">decryptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #DD0000">"encrypted.enc"</span><span style="color: #007700">, </span><span style="color: #DD0000">"decrypted.txt"</span><span style="color: #007700">);<br /><br />class </span><span style="color: #0000BB">AES_CBC<br /></span><span style="color: #007700">{<br />   protected static </span><span style="color: #0000BB">$KEY_SIZES </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'AES-128'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">16</span><span style="color: #007700">,</span><span style="color: #DD0000">'AES-192'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">24</span><span style="color: #007700">,</span><span style="color: #DD0000">'AES-256'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">32</span><span style="color: #007700">);<br />   protected static function </span><span style="color: #0000BB">key_size</span><span style="color: #007700">() { return </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$KEY_SIZES</span><span style="color: #007700">[</span><span style="color: #DD0000">'AES-128'</span><span style="color: #007700">]; } </span><span style="color: #FF8000">//default AES-128<br />   </span><span style="color: #007700">public static function </span><span style="color: #0000BB">encryptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$input_stream</span><span style="color: #007700">, </span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">){<br />      </span><span style="color: #0000BB">$iv_size </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$fin </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_stream</span><span style="color: #007700">, </span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$fc </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">, </span><span style="color: #DD0000">"wb+"</span><span style="color: #007700">);<br />      if (!empty(</span><span style="color: #0000BB">$fin</span><span style="color: #007700">) &amp;&amp; !empty(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">)) {<br />         </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">"_"</span><span style="color: #007700">, </span><span style="color: #0000BB">32</span><span style="color: #007700">) );</span><span style="color: #FF8000">//placeholder, SHA256 HMAC will go here later<br />         </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">$hmac_salt </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_DEV_URANDOM</span><span style="color: #007700">));<br />         </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">$esalt </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_DEV_URANDOM</span><span style="color: #007700">));<br />         </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_DEV_URANDOM</span><span style="color: #007700">));<br />         </span><span style="color: #0000BB">$ekey </span><span style="color: #007700">= </span><span style="color: #0000BB">hash_pbkdf2</span><span style="color: #007700">(</span><span style="color: #DD0000">"sha256"</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$esalt</span><span style="color: #007700">, </span><span style="color: #0000BB">$it</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">, </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">key_size</span><span style="color: #007700">(), </span><span style="color: #0000BB">$raw</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'mode'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'cbc'</span><span style="color: #007700">, </span><span style="color: #DD0000">'iv'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">, </span><span style="color: #DD0000">'key'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$ekey</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">stream_filter_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #DD0000">'mcrypt.rijndael-128'</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_FILTER_WRITE</span><span style="color: #007700">, </span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$infilesize </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />         while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fin</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">$block </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fin</span><span style="color: #007700">, </span><span style="color: #0000BB">8192</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$infilesize</span><span style="color: #007700">+=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$block</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">$block</span><span style="color: #007700">);<br />         }<br />         </span><span style="color: #0000BB">$block_size </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_get_block_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$padding </span><span style="color: #007700">= </span><span style="color: #0000BB">$block_size </span><span style="color: #007700">- (</span><span style="color: #0000BB">$infilesize </span><span style="color: #007700">% </span><span style="color: #0000BB">$block_size</span><span style="color: #007700">);</span><span style="color: #FF8000">//$padding is a number from 1-16<br />         </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$padding</span><span style="color: #007700">), </span><span style="color: #0000BB">$padding</span><span style="color: #007700">) );</span><span style="color: #FF8000">//perform PKCS7 padding<br />         </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fin</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$hmac_raw </span><span style="color: #007700">= </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">calculate_hmac_after_32bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$hmac_salt</span><span style="color: #007700">, </span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$fc </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">, </span><span style="color: #DD0000">"rb+"</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">$hmac_raw</span><span style="color: #007700">);</span><span style="color: #FF8000">//overwrite placeholder<br />         </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">);<br />      }<br />   }<br />   public static function </span><span style="color: #0000BB">decryptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">, </span><span style="color: #0000BB">$out_stream</span><span style="color: #007700">) {<br />      </span><span style="color: #0000BB">$iv_size </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$hmac_raw </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">,  </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">32</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$hmac_salt </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #0000BB">32</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$hmac_calc </span><span style="color: #007700">= </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">calculate_hmac_after_32bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$hmac_salt</span><span style="color: #007700">, </span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$fc </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$aes_filename</span><span style="color: #007700">, </span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$fout </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$out_stream</span><span style="color: #007700">, </span><span style="color: #DD0000">'wb'</span><span style="color: #007700">);<br />      if (!empty(</span><span style="color: #0000BB">$fout</span><span style="color: #007700">) &amp;&amp; !empty(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">) &amp;&amp; </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hash_equals</span><span style="color: #007700">(</span><span style="color: #0000BB">$hmac_raw</span><span style="color: #007700">,</span><span style="color: #0000BB">$hmac_calc</span><span style="color: #007700">)) {<br />         </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">32</span><span style="color: #007700">+</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);</span><span style="color: #FF8000">//skip sha256 hmac and salt<br />         </span><span style="color: #0000BB">$esalt </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$iv    </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$ekey </span><span style="color: #007700">= </span><span style="color: #0000BB">hash_pbkdf2</span><span style="color: #007700">(</span><span style="color: #DD0000">"sha256"</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$esalt</span><span style="color: #007700">, </span><span style="color: #0000BB">$it</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">, </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">key_size</span><span style="color: #007700">(), </span><span style="color: #0000BB">$raw</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'mode'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'cbc'</span><span style="color: #007700">, </span><span style="color: #DD0000">'iv'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">, </span><span style="color: #DD0000">'key'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$ekey</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">stream_filter_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #DD0000">'mdecrypt.rijndael-128'</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_FILTER_READ</span><span style="color: #007700">, </span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br />         while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">$block </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">, </span><span style="color: #0000BB">8192</span><span style="color: #007700">);<br />            if (</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">)) {<br />               </span><span style="color: #0000BB">$padding </span><span style="color: #007700">= </span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$block</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$block</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">]);</span><span style="color: #FF8000">//assume PKCS7 padding<br />               </span><span style="color: #0000BB">$block </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$block</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">-</span><span style="color: #0000BB">$padding</span><span style="color: #007700">);<br />            }<br />            </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fout</span><span style="color: #007700">, </span><span style="color: #0000BB">$block</span><span style="color: #007700">);<br />         }<br />         </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fout</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fc</span><span style="color: #007700">);<br />      }<br />   }<br />   private static function </span><span style="color: #0000BB">hash_equals</span><span style="color: #007700">(</span><span style="color: #0000BB">$str1</span><span style="color: #007700">, </span><span style="color: #0000BB">$str2</span><span style="color: #007700">) {<br />      if(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str1</span><span style="color: #007700">) == </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str2</span><span style="color: #007700">)) {<br />         </span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">$str1 </span><span style="color: #007700">^ </span><span style="color: #0000BB">$str2</span><span style="color: #007700">;<br />         for(</span><span style="color: #0000BB">$ret</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$res</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">--) </span><span style="color: #0000BB">$ret </span><span style="color: #007700">|= </span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />         return !</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />      }<br />      return </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />   }<br />   private static function </span><span style="color: #0000BB">calculate_hmac_after_32bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$hsalt</span><span style="color: #007700">, </span><span style="color: #0000BB">$filename</span><span style="color: #007700">) {<br />      static </span><span style="color: #0000BB">$init</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />      </span><span style="color: #0000BB">$init </span><span style="color: #007700">or </span><span style="color: #0000BB">$init </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_filter_register</span><span style="color: #007700">(</span><span style="color: #DD0000">"user-filter.skipfirst32bytes"</span><span style="color: #007700">, </span><span style="color: #DD0000">"FileSkip32Bytes"</span><span style="color: #007700">);<br />      </span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #DD0000">'php://filter/read=user-filter.skipfirst32bytes/resource=' </span><span style="color: #007700">. </span><span style="color: #0000BB">$filename</span><span style="color: #007700">;<br />      </span><span style="color: #0000BB">$hkey </span><span style="color: #007700">= </span><span style="color: #0000BB">hash_pbkdf2</span><span style="color: #007700">(</span><span style="color: #DD0000">"sha256"</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$hsalt</span><span style="color: #007700">, </span><span style="color: #0000BB">$iterations</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">, </span><span style="color: #0000BB">24</span><span style="color: #007700">, </span><span style="color: #0000BB">$raw</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />      return </span><span style="color: #0000BB">hash_hmac_file</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">, </span><span style="color: #0000BB">$stream</span><span style="color: #007700">, </span><span style="color: #0000BB">$hkey</span><span style="color: #007700">, </span><span style="color: #0000BB">$raw</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />   }<br />}<br />class </span><span style="color: #0000BB">FileSkip32Bytes </span><span style="color: #007700">extends </span><span style="color: #0000BB">php_user_filter<br /></span><span style="color: #007700">{<br />   private </span><span style="color: #0000BB">$skipped</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />   function </span><span style="color: #0000BB">filter</span><span style="color: #007700">(</span><span style="color: #0000BB">$in</span><span style="color: #007700">, </span><span style="color: #0000BB">$out</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$consumed</span><span style="color: #007700">, </span><span style="color: #0000BB">$closing</span><span style="color: #007700">)  {<br />      while (</span><span style="color: #0000BB">$bucket </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_bucket_make_writeable</span><span style="color: #007700">(</span><span style="color: #0000BB">$in</span><span style="color: #007700">)) {<br />         </span><span style="color: #0000BB">$outlen </span><span style="color: #007700">= </span><span style="color: #0000BB">$bucket</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">datalen</span><span style="color: #007700">;<br />         if (</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skipped</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">32</span><span style="color: #007700">){<br />            </span><span style="color: #0000BB">$outlen </span><span style="color: #007700">= </span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$bucket</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">datalen</span><span style="color: #007700">,</span><span style="color: #0000BB">32</span><span style="color: #007700">-</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skipped</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$bucket</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bucket</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">, </span><span style="color: #0000BB">$outlen</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$bucket</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">datalen </span><span style="color: #007700">= </span><span style="color: #0000BB">$bucket</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">datalen</span><span style="color: #007700">-</span><span style="color: #0000BB">$outlen</span><span style="color: #007700">;<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skipped</span><span style="color: #007700">+=</span><span style="color: #0000BB">$outlen</span><span style="color: #007700">;<br />         }<br />         </span><span style="color: #0000BB">$consumed </span><span style="color: #007700">+= </span><span style="color: #0000BB">$outlen</span><span style="color: #007700">;<br />         </span><span style="color: #0000BB">stream_bucket_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$out</span><span style="color: #007700">, </span><span style="color: #0000BB">$bucket</span><span style="color: #007700">);<br />      }<br />      return </span><span style="color: #0000BB">PSFS_PASS_ON</span><span style="color: #007700">;<br />   }<br />}<br />class </span><span style="color: #0000BB">AES_128_CBC </span><span style="color: #007700">extends </span><span style="color: #0000BB">AES_CBC </span><span style="color: #007700">{<br />   protected static function </span><span style="color: #0000BB">key_size</span><span style="color: #007700">() { return </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$KEY_SIZES</span><span style="color: #007700">[</span><span style="color: #DD0000">'AES-128'</span><span style="color: #007700">]; }<br />}<br />class </span><span style="color: #0000BB">AES_192_CBC </span><span style="color: #007700">extends </span><span style="color: #0000BB">AES_CBC </span><span style="color: #007700">{<br />   protected static function </span><span style="color: #0000BB">key_size</span><span style="color: #007700">() { return </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$KEY_SIZES</span><span style="color: #007700">[</span><span style="color: #DD0000">'AES-192'</span><span style="color: #007700">]; }<br />}<br />class </span><span style="color: #0000BB">AES_256_CBC </span><span style="color: #007700">extends </span><span style="color: #0000BB">AES_CBC </span><span style="color: #007700">{<br />   protected static function </span><span style="color: #0000BB">key_size</span><span style="color: #007700">() { return </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$KEY_SIZES</span><span style="color: #007700">[</span><span style="color: #DD0000">'AES-256'</span><span style="color: #007700">]; }<br />}</span></span></code></div>
    </div>

   </div>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/filters.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffilters.encryption%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=filters.encryption&amp;repo=en&amp;redirect=https://www.php.net/manual/en/filters.encryption.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121484">  <div class="votes">
    <div id="Vu121484">
    <a href="/manual/vote-note.php?id=121484&amp;page=filters.encryption&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121484">
    <a href="/manual/vote-note.php?id=121484&amp;page=filters.encryption&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121484" title="55% like this...">
    2
    </div>
  </div>
  <a href="#121484" class="name">
  <strong class="user"><em>Maarten Bodewes</em></strong></a><a class="genanchor" href="#121484"> &para;</a><div class="date" title="2017-08-06 12:21"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121484">
<div class="phpcode"><code><span class="html">The examples on this page should be destroyed with utmost urgency.<br /><br />Strangely most people will fall over the use of generating the IV and 3DES key using MD5, a weak hash function, e.g. the previous note and CryptoFails blog.<br /><br /><a href="http://www.cryptofails.com/post/70059608390/php-documentation-woes" rel="nofollow" target="_blank">http://www.cryptofails.com/post/70059608390/php-documentation-woes</a><br /><br />A password based key derivation function should be used (bcrypt, PBKDF2).<br /><br />However the use of MD-5 for key derivation however isn't that bad and if the password is strong enough (it usually isn't) then the generated DES ABC key is strong enough even now.<br /> <br />Using an identical IV for each password means that this function directly leaks information about the encrypted file. If the start of two encrypted files is identical then this function will directly leak information. For instance, if the routine encrypts multiple images then the JPEG header would be easily distinguished.<br /><br />All in all these examples use deprecated routines (mcrypt), deprecated cryptographic functions (MD5 / DES) and then incorrectly perform the actual encryption. Enough reason to destroy them in the first place.</span></code></div>
  </div>
 </div>
  <div class="note" id="120692">  <div class="votes">
    <div id="Vu120692">
    <a href="/manual/vote-note.php?id=120692&amp;page=filters.encryption&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120692">
    <a href="/manual/vote-note.php?id=120692&amp;page=filters.encryption&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120692" title="53% like this...">
    2
    </div>
  </div>
  <a href="#120692" class="name">
  <strong class="user"><em>Uwe Ohse</em></strong></a><a class="genanchor" href="#120692"> &para;</a><div class="date" title="2017-02-22 04:17"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120692">
<div class="phpcode"><code><span class="html">1) The mcrypt module has been deprecated with PHP 7.1.<br />What does that mean for the encryption filters?<br /><br />2) deriving the IV from the secret passphrase seems wrong. This leaks information about the passphrase without need.<br /><br />3) using md5() for this? Really? hash() has been available since PHP 5.1.2.<br /><br />4) hashing the passphrase twice does not add any security.<br /><br />5) using substr() on binary data (why, oh why, is true passed to md5()?) might lead to headaches if mbstring.func_overload is used.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=filters.encryption&amp;repo=en&amp;redirect=https://www.php.net/manual/en/filters.encryption.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="filters.php">List of Available Filters</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="filters.string.php" title="String Filters">String Filters</a>
                        </li>
                                                <li class="">
                            <a href="filters.convert.php" title="Conversion Filters">Conversion Filters</a>
                        </li>
                                                <li class="">
                            <a href="filters.compression.php" title="Compression Filters">Compression Filters</a>
                        </li>
                                                <li class="current">
                            <a href="filters.encryption.php" title="Encryption Filters">Encryption Filters</a>
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
