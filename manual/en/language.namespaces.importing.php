<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Aliasing and Importing - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.namespaces.importing.php">
 <link rel="shorturl" href="https://www.php.net/namespaces.importing">
 <link rel="alternate" href="https://www.php.net/namespaces.importing" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.namespaces.nsconstants.php">
 <link rel="next" href="https://www.php.net/manual/en/language.namespaces.global.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.namespaces.importing.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.namespaces.importing.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.namespaces.importing.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.namespaces.importing.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.namespaces.importing.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.namespaces.importing.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.namespaces.importing.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.namespaces.importing.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.namespaces.importing.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.namespaces.importing.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.namespaces.importing.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Using namespaces: Aliasing/Importing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Aliasing and Importing - Manual" />
<meta name="twitter:description" content="Using namespaces: Aliasing/Importing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Aliasing and Importing - Manual" />
<meta itemprop="description" content="Using namespaces: Aliasing/Importing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Using namespaces: Aliasing/Importing" />

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
        <a href="language.namespaces.global.php">
          Global space &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.namespaces.nsconstants.php">
          &laquo; namespace keyword and __NAMESPACE__        </a>
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
            <option value='en/language.namespaces.importing.php' selected="selected">English</option>
            <option value='de/language.namespaces.importing.php'>German</option>
            <option value='es/language.namespaces.importing.php'>Spanish</option>
            <option value='fr/language.namespaces.importing.php'>French</option>
            <option value='it/language.namespaces.importing.php'>Italian</option>
            <option value='ja/language.namespaces.importing.php'>Japanese</option>
            <option value='pt_BR/language.namespaces.importing.php'>Brazilian Portuguese</option>
            <option value='ru/language.namespaces.importing.php'>Russian</option>
            <option value='tr/language.namespaces.importing.php'>Turkish</option>
            <option value='uk/language.namespaces.importing.php'>Ukrainian</option>
            <option value='zh/language.namespaces.importing.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.namespaces.importing" class="sect1">
  <h2 class="title">Using namespaces: Aliasing/Importing</h2>
  
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
  <p class="para">
   The ability to refer to an external fully qualified name with an alias, or importing,
   is an important feature of namespaces. This is similar to the
   ability of unix-based filesystems to create symbolic links to a file or to a directory.
  </p>
  <p class="para">
   PHP can alias(/import) constants, functions, classes, interfaces, traits, enums and namespaces.
  </p>
  <p class="para">
   Aliasing is accomplished with the <code class="literal">use</code> operator.
   Here is an example showing all 5 kinds of importing:
   <div class="example" id="example-388">
    <p><strong>Example #1 importing/aliasing with the use operator</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">My\Full\Classname </span><span style="color: #007700">as </span><span style="color: #0000BB">Another</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// this is the same as use My\Full\NSname as NSname<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">My\Full\NSname</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// importing a global class<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">ArrayObject</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// importing a function<br /></span><span style="color: #007700">use function </span><span style="color: #0000BB">My\Full\functionName</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// aliasing a function<br /></span><span style="color: #007700">use function </span><span style="color: #0000BB">My\Full\functionName </span><span style="color: #007700">as </span><span style="color: #0000BB">func</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// importing a constant<br /></span><span style="color: #007700">use const </span><span style="color: #0000BB">My\Full\CONSTANT</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">namespace\Another</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class foo\Another<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Another</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class My\Full\Classname<br /></span><span style="color: #0000BB">NSname\subns\func</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls function My\Full\NSname\subns\func<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">ArrayObject</span><span style="color: #007700">(array(</span><span style="color: #0000BB">1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// instantiates object of class ArrayObject<br />// without the "use ArrayObject" we would instantiate an object of class foo\ArrayObject<br /></span><span style="color: #0000BB">func</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls function My\Full\functionName<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">CONSTANT</span><span style="color: #007700">; </span><span style="color: #FF8000">// echoes the value of My\Full\CONSTANT<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   Note that for namespaced names (fully qualified namespace names containing
   namespace separator, such as <code class="literal">Foo\Bar</code> as opposed to global names that
   do not, such as <code class="literal">FooBar</code>), the leading backslash is unnecessary and not
   recommended, as import names
   must be fully qualified, and are not processed relative to the current namespace.
  </p>
  <p class="para">
   PHP additionally supports a convenience shortcut to place multiple use statements
   on the same line
   <div class="example" id="example-389">
    <p><strong>Example #2 importing/aliasing with the use operator, multiple use statements combined</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">My\Full\Classname </span><span style="color: #007700">as </span><span style="color: #0000BB">Another</span><span style="color: #007700">, </span><span style="color: #0000BB">My\Full\NSname</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Another</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class My\Full\Classname<br /></span><span style="color: #0000BB">NSname\subns\func</span><span style="color: #007700">(); </span><span style="color: #FF8000">// calls function My\Full\NSname\subns\func<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   Importing is performed at compile-time, and so does not affect dynamic class, function
   or constant names.
   <div class="example" id="example-390">
    <p><strong>Example #3 Importing and dynamic names</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">My\Full\Classname </span><span style="color: #007700">as </span><span style="color: #0000BB">Another</span><span style="color: #007700">, </span><span style="color: #0000BB">My\Full\NSname</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Another</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class My\Full\Classname<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">'Another'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">$a</span><span style="color: #007700">;      </span><span style="color: #FF8000">// instantiates object of class Another<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   In addition, importing only affects unqualified and qualified names. Fully qualified
   names are absolute, and unaffected by imports.
   <div class="example" id="example-391">
    <p><strong>Example #4 Importing and fully qualified names</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">My\Full\Classname </span><span style="color: #007700">as </span><span style="color: #0000BB">Another</span><span style="color: #007700">, </span><span style="color: #0000BB">My\Full\NSname</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Another</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class My\Full\Classname<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">\Another</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class Another<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Another\thing</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class My\Full\Classname\thing<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">\Another\thing</span><span style="color: #007700">; </span><span style="color: #FF8000">// instantiates object of class Another\thing<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <div class="sect2" id="language.namespaces.importing.scope">
   <h3 class="title">Scoping rules for importing</h3>
   <p class="para">
    The <code class="literal">use</code> keyword must be declared in the
    outermost scope of a file (the global scope) or inside namespace
    declarations. This is because the importing is done at compile
    time and not runtime, so it cannot be block scoped. The following
    example will show an illegal use of the <code class="literal">use</code>
    keyword:
   </p>
   <p class="para">
    <div class="example" id="example-392">
     <p><strong>Example #5 Illegal importing rule</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">Languages</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">toGreenlandic</span><span style="color: #007700">()<br />{<br />    use </span><span style="color: #0000BB">Languages\Danish</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// ...<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Importing rules are per file basis, meaning included files will
     <em>NOT</em> inherit the parent file&#039;s importing rules.
    </p>
   </p></blockquote>
  </div>
  <div class="sect2" id="language.namespaces.importing.group">
   <h3 class="title">Group <code class="literal">use</code> declarations</h3>
   <p class="para">
    Classes, functions and constants being imported from
    the same <a href="language.namespaces.definition.php" class="link"><code class="literal">namespace</code></a> can be grouped together in a single <a href="language.namespaces.importing.php" class="link"><code class="literal">use</code></a>
    statement.
   </p>
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">use </span><span style="color: #0000BB">some\namespace\ClassA</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">some\namespace\ClassB</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">some\namespace\ClassC </span><span style="color: #007700">as </span><span style="color: #0000BB">C</span><span style="color: #007700">;<br /><br />use function </span><span style="color: #0000BB">some\namespace\fn_a</span><span style="color: #007700">;<br />use function </span><span style="color: #0000BB">some\namespace\fn_b</span><span style="color: #007700">;<br />use function </span><span style="color: #0000BB">some\namespace\fn_c</span><span style="color: #007700">;<br /><br />use const </span><span style="color: #0000BB">some\namespace\ConstA</span><span style="color: #007700">;<br />use const </span><span style="color: #0000BB">some\namespace\ConstB</span><span style="color: #007700">;<br />use const </span><span style="color: #0000BB">some\namespace\ConstC</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// is equivalent to the following groupped use declaration<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">some\namespace</span><span style="color: #007700">\{</span><span style="color: #0000BB">ClassA</span><span style="color: #007700">, </span><span style="color: #0000BB">ClassB</span><span style="color: #007700">, </span><span style="color: #0000BB">ClassC </span><span style="color: #007700">as </span><span style="color: #0000BB">C</span><span style="color: #007700">};<br />use function </span><span style="color: #0000BB">some\namespace</span><span style="color: #007700">\{</span><span style="color: #0000BB">fn_a</span><span style="color: #007700">, </span><span style="color: #0000BB">fn_b</span><span style="color: #007700">, </span><span style="color: #0000BB">fn_c</span><span style="color: #007700">};<br />use const </span><span style="color: #0000BB">some\namespace</span><span style="color: #007700">\{</span><span style="color: #0000BB">ConstA</span><span style="color: #007700">, </span><span style="color: #0000BB">ConstB</span><span style="color: #007700">, </span><span style="color: #0000BB">ConstC</span><span style="color: #007700">};</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/language/namespaces.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.namespaces.importing%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.namespaces.importing&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.importing.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119919">  <div class="votes">
    <div id="Vu119919">
    <a href="/manual/vote-note.php?id=119919&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119919">
    <a href="/manual/vote-note.php?id=119919&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119919" title="87% like this...">
    200
    </div>
  </div>
  <a href="#119919" class="name">
  <strong class="user"><em>dominic_mayers at yahoo dot com</em></strong></a><a class="genanchor" href="#119919"> &para;</a><div class="date" title="2016-09-20 10:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119919">
<div class="phpcode"><code><span class="html">The keyword "use" has been recycled for three distinct applications: <br />1- to import/alias classes, traits, constants, etc. in namespaces, <br />2- to insert traits in classes, <br />3- to inherit variables in closures. <br />This page is only about the first application: importing/aliasing. Traits can be inserted in classes, but this is different from importing a trait in a namespace, which cannot be done in a block scope, as pointed out in example 5. This can be confusing, especially since all searches for the keyword "use" are directed to the documentation here on importing/aliasing.</span></code></div>
  </div>
 </div>
  <div class="note" id="114265">  <div class="votes">
    <div id="Vu114265">
    <a href="/manual/vote-note.php?id=114265&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114265">
    <a href="/manual/vote-note.php?id=114265&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114265" title="82% like this...">
    159
    </div>
  </div>
  <a href="#114265" class="name">
  <strong class="user"><em>anon</em></strong></a><a class="genanchor" href="#114265"> &para;</a><div class="date" title="2014-01-30 09:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114265">
<div class="phpcode"><code><span class="html">The <span class="default">&lt;?php </span><span class="keyword">use </span><span class="default">?&gt;</span> statement does not load the class file. You have to do this with the <span class="default">&lt;?php </span><span class="keyword">require </span><span class="default">?&gt;</span> statement or by using an autoload function.</span></code></div>
  </div>
 </div>
  <div class="note" id="121785">  <div class="votes">
    <div id="Vu121785">
    <a href="/manual/vote-note.php?id=121785&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121785">
    <a href="/manual/vote-note.php?id=121785&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121785" title="81% like this...">
    58
    </div>
  </div>
  <a href="#121785" class="name">
  <strong class="user"><em>Mawia HL</em></strong></a><a class="genanchor" href="#121785"> &para;</a><div class="date" title="2017-10-21 05:03"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121785">
<div class="phpcode"><code><span class="html">Here is a handy way of importing classes, functions and conts using a single use keyword:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">Mizo\Web</span><span class="keyword">\ {<br />   </span><span class="default">Php\WebSite</span><span class="keyword">,<br />   </span><span class="default">Php\KeyWord</span><span class="keyword">,<br />   </span><span class="default">Php\UnicodePrint</span><span class="keyword">,<br />   </span><span class="default">JS\JavaScript</span><span class="keyword">, <br />   function </span><span class="default">JS\printTotal</span><span class="keyword">, <br />   function </span><span class="default">JS\printList</span><span class="keyword">, <br />   const </span><span class="default">JS\BUAIKUM</span><span class="keyword">, <br />   const </span><span class="default">JS\MAUTAM<br /></span><span class="keyword">};<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111874">  <div class="votes">
    <div id="Vu111874">
    <a href="/manual/vote-note.php?id=111874&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111874">
    <a href="/manual/vote-note.php?id=111874&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111874" title="75% like this...">
    82
    </div>
  </div>
  <a href="#111874" class="name">
  <strong class="user"><em>k at webnfo dot com</em></strong></a><a class="genanchor" href="#111874"> &para;</a><div class="date" title="2013-04-07 01:32"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111874">
<div class="phpcode"><code><span class="html">Note that you can not alias global namespace:<br /><br />use \ as test;<br /><br />echo test\strlen('');<br /><br />won't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="121045">  <div class="votes">
    <div id="Vu121045">
    <a href="/manual/vote-note.php?id=121045&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121045">
    <a href="/manual/vote-note.php?id=121045&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121045" title="73% like this...">
    33
    </div>
  </div>
  <a href="#121045" class="name">
  <strong class="user"><em>xzero at elite7hackers dot net</em></strong></a><a class="genanchor" href="#121045"> &para;</a><div class="date" title="2017-05-04 11:13"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121045">
<div class="phpcode"><code><span class="html">I couldn't find answer to this question so I tested myself. <br />I think it's worth noting:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">ExistingNamespace\NonExsistingClass</span><span class="keyword">;<br />use </span><span class="default">ExistingNamespace\NonExsistingClass </span><span class="keyword">as </span><span class="default">whatever</span><span class="keyword">;<br />use </span><span class="default">NonExistingNamespace\NonExsistingClass</span><span class="keyword">;<br />use </span><span class="default">NonExistingNamespace\NonExsistingClass </span><span class="keyword">as </span><span class="default">whatever</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />None of above will actually cause errors unless you actually try to use class you tried to import. <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// And this code will issue standard PHP error for non existing class.<br /></span><span class="keyword">use </span><span class="default">ExistingNamespace\NonExsistingClass </span><span class="keyword">as </span><span class="default">whatever</span><span class="keyword">;<br /></span><span class="default">$whatever </span><span class="keyword">= new </span><span class="default">whatever</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119091">  <div class="votes">
    <div id="Vu119091">
    <a href="/manual/vote-note.php?id=119091&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119091">
    <a href="/manual/vote-note.php?id=119091&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119091" title="72% like this...">
    23
    </div>
  </div>
  <a href="#119091" class="name">
  <strong class="user"><em>me at ruslanbes dot com</em></strong></a><a class="genanchor" href="#119091"> &para;</a><div class="date" title="2016-03-31 07:34"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119091">
<div class="phpcode"><code><span class="html">Note the code `use ns1\c1` may refer to importing class `c1` from namespace `ns1` as well as importing whole namespace `ns1\c1` or even import both of them in one line. Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">ns1</span><span class="keyword">;<br /><br />class </span><span class="default">c1</span><span class="keyword">{}<br /><br />namespace </span><span class="default">ns1\c1</span><span class="keyword">;<br /><br />class </span><span class="default">c11</span><span class="keyword">{}<br /><br />namespace </span><span class="default">main</span><span class="keyword">;<br /><br />use </span><span class="default">ns1\c1</span><span class="keyword">;<br /><br /></span><span class="default">$c1 </span><span class="keyword">= new </span><span class="default">c1</span><span class="keyword">();<br /></span><span class="default">$c11 </span><span class="keyword">= new </span><span class="default">c1\c11</span><span class="keyword">();<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$c1</span><span class="keyword">); </span><span class="comment">// object(ns1\c1)#1 (0) { }<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$c11</span><span class="keyword">); </span><span class="comment">// object(ns1\c1\c11)#2 (0) { }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105394">  <div class="votes">
    <div id="Vu105394">
    <a href="/manual/vote-note.php?id=105394&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105394">
    <a href="/manual/vote-note.php?id=105394&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105394" title="64% like this...">
    29
    </div>
  </div>
  <a href="#105394" class="name">
  <strong class="user"><em>c dot 1 at smithies dot org</em></strong></a><a class="genanchor" href="#105394"> &para;</a><div class="date" title="2011-08-14 03:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105394">
<div class="phpcode"><code><span class="html">If you are testing your code at the CLI, note that namespace aliases do not work!<br /><br />(Before I go on, all the backslashes in this example are changed to percent signs because I cannot get sensible results to display in the posting preview otherwise. Please mentally translate all percent signs henceforth as backslashes.)<br /><br />Suppose you have a class you want to test in myclass.php:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">my</span><span class="keyword">%</span><span class="default">space</span><span class="keyword">;<br />class </span><span class="default">myclass </span><span class="keyword">{<br /> </span><span class="comment">// ...<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />and you then go into the CLI to test it. You would like to think that this would work, as you type it line by line:<br /><br />require 'myclass.php';<br />use my%space%myclass; // should set 'myclass' as alias for 'my%space%myclass'<br />$x = new myclass; // FATAL ERROR<br /><br />I believe that this is because aliases are only resolved at compile time, whereas the CLI simply evaluates statements; so use statements are ineffective in the CLI.<br /><br />If you put your test code into test.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">require </span><span class="string">'myclass.php'</span><span class="keyword">;<br />use </span><span class="default">my</span><span class="keyword">%</span><span class="default">space</span><span class="keyword">%</span><span class="default">myclass</span><span class="keyword">;<br /></span><span class="default">$x </span><span class="keyword">= new </span><span class="default">myclass</span><span class="keyword">;<br /></span><span class="comment">//...<br /></span><span class="default">?&gt;<br /></span>it will work fine.<br /><br />I hope this reduces the number of prematurely bald people.</span></code></div>
  </div>
 </div>
  <div class="note" id="110978">  <div class="votes">
    <div id="Vu110978">
    <a href="/manual/vote-note.php?id=110978&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110978">
    <a href="/manual/vote-note.php?id=110978&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110978" title="60% like this...">
    18
    </div>
  </div>
  <a href="#110978" class="name">
  <strong class="user"><em>x at d dot a dot r dot k dot REMOVEDOTSANDTHIS dot gray dot org</em></strong></a><a class="genanchor" href="#110978"> &para;</a><div class="date" title="2013-01-02 05:13"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110978">
<div class="phpcode"><code><span class="html">You are allowed to "use" the same resource multiple times as long as it is imported under a different alias at each invocation.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">Lend</span><span class="keyword">;<br />use </span><span class="default">Lend\l1</span><span class="keyword">;<br />use </span><span class="default">Lend\l1 </span><span class="keyword">as </span><span class="default">l3</span><span class="keyword">;<br />use </span><span class="default">Lend\l2</span><span class="keyword">;<br />use </span><span class="default">Lend\l1\Keller</span><span class="keyword">;<br />use </span><span class="default">Lend\l1\Keller </span><span class="keyword">as </span><span class="default">Stellar</span><span class="keyword">;<br />use </span><span class="default">Lend\l1\Keller </span><span class="keyword">as </span><span class="default">Zellar</span><span class="keyword">;<br />use </span><span class="default">Lend\l2\Keller </span><span class="keyword">as </span><span class="default">Dellar</span><span class="keyword">;<br /><br />...<br /><br /></span><span class="default">?&gt;<br /></span><br />In the above example, "Keller", "Stellar", and "Zellar" are all references to "\Lend\l1\Keller", as are "Lend\l1\Keller", "l1\Keller", and "l3\Keller".</span></code></div>
  </div>
 </div>
  <div class="note" id="111634">  <div class="votes">
    <div id="Vu111634">
    <a href="/manual/vote-note.php?id=111634&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111634">
    <a href="/manual/vote-note.php?id=111634&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111634" title="60% like this...">
    16
    </div>
  </div>
  <a href="#111634" class="name">
  <strong class="user"><em>cl</em></strong></a><a class="genanchor" href="#111634"> &para;</a><div class="date" title="2013-03-11 12:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111634">
<div class="phpcode"><code><span class="html">Something that is not immediately obvious, particular with PHP 5.3, is that namespace resolutions within an import are not resolved recursively.  i.e.: if you alias an import and then use that alias in another import then this latter import will not be fully resolved with the former import.<br /><br />For example:<br />use \Controllers as C;<br />use C\First;<br />use C\Last;<br /><br />Both the First and Last namespaces are NOT resolved as \Controllers\First or \Controllers\Last as one might intend.</span></code></div>
  </div>
 </div>
  <div class="note" id="119970">  <div class="votes">
    <div id="Vu119970">
    <a href="/manual/vote-note.php?id=119970&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119970">
    <a href="/manual/vote-note.php?id=119970&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119970" title="56% like this...">
    4
    </div>
  </div>
  <a href="#119970" class="name">
  <strong class="user"><em>ultimater at gmail dot com</em></strong></a><a class="genanchor" href="#119970"> &para;</a><div class="date" title="2016-09-30 10:53"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119970">
<div class="phpcode"><code><span class="html">Note that "use" importing/aliasing only applies to the current namespace block.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">SuperCoolLibrary<br /></span><span class="keyword">{<br />    class </span><span class="default">Meta<br />    </span><span class="keyword">{<br />        static public function </span><span class="default">getVersion</span><span class="keyword">()<br />        {<br />            return </span><span class="string">'2.7.1'</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br />namespace<br />{<br />    use </span><span class="default">SuperCoolLibrary\Meta</span><span class="keyword">;<br />    echo </span><span class="default">Meta</span><span class="keyword">::</span><span class="default">getVersion</span><span class="keyword">();</span><span class="comment">//outputs 2.7.1<br /></span><span class="keyword">}<br /><br />namespace<br />{<br />    echo </span><span class="default">Meta</span><span class="keyword">::</span><span class="default">getVersion</span><span class="keyword">();</span><span class="comment">//fatal error<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />To get the expected behavior, you'd use:<br />class_alias('SuperCoolLibrary\Meta','Meta');</span></code></div>
  </div>
 </div>
  <div class="note" id="120644">  <div class="votes">
    <div id="Vu120644">
    <a href="/manual/vote-note.php?id=120644&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120644">
    <a href="/manual/vote-note.php?id=120644&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120644" title="51% like this...">
    1
    </div>
  </div>
  <a href="#120644" class="name">
  <strong class="user"><em>ZhangLiang</em></strong></a><a class="genanchor" href="#120644"> &para;</a><div class="date" title="2017-02-15 06:16"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120644">
<div class="phpcode"><code><span class="html">In Chinese,there is an error in translation:<br />// 如果不使用 "use \ArrayObject" ，则实例化一个 foo\ArrayObject 对象<br />it should be<br />// 如果不使用 "use ArrayObject" ，则实例化一个 foo\ArrayObject 对象<br /><br />/*********************************************/<br />中文下翻译有错误<br />// 如果不使用 "use \ArrayObject" ，则实例化一个 foo\ArrayObject 对象<br />这句话应该是<br />// 如果不使用 "use ArrayObject" ，则实例化一个 foo\ArrayObject 对象</span></code></div>
  </div>
 </div>
  <div class="note" id="125931">  <div class="votes">
    <div id="Vu125931">
    <a href="/manual/vote-note.php?id=125931&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125931">
    <a href="/manual/vote-note.php?id=125931&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125931" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125931" class="name">
  <strong class="user"><em>eithed at google mail</em></strong></a><a class="genanchor" href="#125931"> &para;</a><div class="date" title="2021-03-14 05:14"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125931">
<div class="phpcode"><code><span class="html">Bear in mind that it's perfectly fine to alias namespaces, ie:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">A\B\C\D\E\User</span><span class="keyword">;<br /><br />new </span><span class="default">User</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />can be also written as:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">A\B\C\D\E </span><span class="keyword">as </span><span class="default">ENamespace</span><span class="keyword">;<br /><br />new </span><span class="default">ENamespace\User</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />however following will not work:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">A\B\C\D\E </span><span class="keyword">as </span><span class="default">ENamespace</span><span class="keyword">;<br />use </span><span class="default">ENamespace\User</span><span class="keyword">;<br /><br />new </span><span class="default">User</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />&gt; PHP Error:  Class "ENamespace\User" not found</span></code></div>
  </div>
 </div>
  <div class="note" id="101199">  <div class="votes">
    <div id="Vu101199">
    <a href="/manual/vote-note.php?id=101199&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101199">
    <a href="/manual/vote-note.php?id=101199&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101199" title="52% like this...">
    3
    </div>
  </div>
  <a href="#101199" class="name">
  <strong class="user"><em>thinice at gmail.com</em></strong></a><a class="genanchor" href="#101199"> &para;</a><div class="date" title="2010-12-01 10:07"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101199">
<div class="phpcode"><code><span class="html">Because imports happen at compile time, there's no polymorphism potential by embedding the use keyword in a conditonal.<br /><br />e.g.:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$objType </span><span class="keyword">== </span><span class="string">'canine'</span><span class="keyword">) {<br />  use </span><span class="default">Animal\Canine </span><span class="keyword">as </span><span class="default">Beast</span><span class="keyword">;<br />}<br />if (</span><span class="default">$objType </span><span class="keyword">== </span><span class="string">'bovine'</span><span class="keyword">) {<br />  use </span><span class="default">Animal\Bovine </span><span class="keyword">as </span><span class="default">Beast</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$oBeast </span><span class="keyword">= new </span><span class="default">Beast</span><span class="keyword">;<br /></span><span class="default">$oBeast</span><span class="keyword">-&gt;</span><span class="default">feed</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119920">  <div class="votes">
    <div id="Vu119920">
    <a href="/manual/vote-note.php?id=119920&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119920">
    <a href="/manual/vote-note.php?id=119920&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119920" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#119920" class="name">
  <strong class="user"><em>dominic_mayers at yahoo dot com</em></strong></a><a class="genanchor" href="#119920"> &para;</a><div class="date" title="2016-09-20 11:18"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119920">
<div class="phpcode"><code><span class="html">To clarify the distinction between inserting a trait in a class and importing a trait in a namespace, here is an example where we first import and then insert a trait. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">ns1</span><span class="keyword">;<br />trait </span><span class="default">T </span><span class="keyword">{<br />  static </span><span class="default">$a </span><span class="keyword">= </span><span class="string">"In T"</span><span class="keyword">;<br />}<br /><br />namespace </span><span class="default">ns2</span><span class="keyword">;<br />use </span><span class="default">ns1\T</span><span class="keyword">; </span><span class="comment">// Importing the name of trait ns1\T  in the namespace ns2<br /></span><span class="keyword">class </span><span class="default">C </span><span class="keyword">{ <br />  use </span><span class="default">T</span><span class="keyword">; </span><span class="comment">// Inserting trait T in the class C, making use of the imported name. <br /></span><span class="keyword">}  <br /><br />namespace </span><span class="default">main</span><span class="keyword">;<br />use </span><span class="default">ns2\C</span><span class="keyword">;<br />echo </span><span class="default">C</span><span class="keyword">::</span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// In T;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116852">  <div class="votes">
    <div id="Vu116852">
    <a href="/manual/vote-note.php?id=116852&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116852">
    <a href="/manual/vote-note.php?id=116852&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116852" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#116852" class="name">
  <strong class="user"><em>kelerest123 at gmail dot com</em></strong></a><a class="genanchor" href="#116852"> &para;</a><div class="date" title="2015-03-10 05:50"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116852">
<div class="phpcode"><code><span class="html">For the fifth example (example #5):<br /><br />When in block scope, it is not an illegal use of use keyword, because it is used for sharing things with traits.</span></code></div>
  </div>
 </div>
  <div class="note" id="125337">  <div class="votes">
    <div id="Vu125337">
    <a href="/manual/vote-note.php?id=125337&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125337">
    <a href="/manual/vote-note.php?id=125337&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125337" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#125337" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#125337"> &para;</a><div class="date" title="2020-09-05 10:48"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125337">
<div class="phpcode"><code><span class="html">Note: you can import not existed items without errors:<br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">UndefinedClass</span><span class="keyword">;<br />use function </span><span class="default">undefined_fn</span><span class="keyword">;<br />use const </span><span class="default">UNDEFINED_CONST</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>but you cant use/call they:<br /><span class="default">&lt;?php<br />$new UndefinedClass</span><span class="keyword">; </span><span class="comment">// Error: Use of undefined class<br /></span><span class="keyword">use function </span><span class="default">undefined_fn</span><span class="keyword">; </span><span class="comment">// Error: Use of undefined function<br /></span><span class="keyword">use const </span><span class="default">UNDEFINED_CONST</span><span class="keyword">; </span><span class="comment">// Error: Use of undefined constant<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127140">  <div class="votes">
    <div id="Vu127140">
    <a href="/manual/vote-note.php?id=127140&amp;page=language.namespaces.importing&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127140">
    <a href="/manual/vote-note.php?id=127140&amp;page=language.namespaces.importing&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127140" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#127140" class="name">
  <strong class="user"><em>tuxedobob</em></strong></a><a class="genanchor" href="#127140"> &para;</a><div class="date" title="2022-05-27 04:32"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127140">
<div class="phpcode"><code><span class="html">Note that because this is processed at compile time, this doesn't work when running PHP in interactive mode. use commands won't throw an error, but they won't do anything, either.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.namespaces.importing&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.importing.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="language.namespaces.importing.php" title="Aliasing and Importing">Aliasing and Importing</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.global.php" title="Global space">Global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.fallback.php" title="Fallback to global space">Fallback to global space</a>
                        </li>
                                                <li class="">
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
