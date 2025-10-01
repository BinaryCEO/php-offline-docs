<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: COM Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.com.php">
 <link rel="shorturl" href="https://www.php.net/com">
 <link rel="alternate" href="https://www.php.net/com" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.com.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.com-safearray-proxy.php">
 <link rel="next" href="https://www.php.net/manual/en/function.com-create-guid.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.com.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.com.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.com.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.com.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.com.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.com.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.com.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.com.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.com.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.com.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.com.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="COM Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: COM Functions - Manual" />
<meta name="twitter:description" content="COM Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: COM Functions - Manual" />
<meta itemprop="description" content="COM Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="COM Functions" />

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
        <a href="function.com-create-guid.php">
          com_create_guid &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.com-safearray-proxy.php">
          &laquo; com_safearray_proxy        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.windows.php'>Windows Only Extensions</a></li>      <li><a href='book.com.php'>COM</a></li>      </ul>
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
            <option value='en/ref.com.php' selected="selected">English</option>
            <option value='de/ref.com.php'>German</option>
            <option value='es/ref.com.php'>Spanish</option>
            <option value='fr/ref.com.php'>French</option>
            <option value='it/ref.com.php'>Italian</option>
            <option value='ja/ref.com.php'>Japanese</option>
            <option value='pt_BR/ref.com.php'>Brazilian Portuguese</option>
            <option value='ru/ref.com.php'>Russian</option>
            <option value='tr/ref.com.php'>Turkish</option>
            <option value='uk/ref.com.php'>Ukrainian</option>
            <option value='zh/ref.com.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.com" class="reference"> 
 <h1 class="title">COM Functions</h1> 
   
 <div class="partintro">
  <div class="section" id="com.seealso">
   <h2 class="title">See Also</h2>
   <p class="para">
    For further information on COM read the <a href="https://docs.microsoft.com/windows/desktop/com/component-object-model--com--portal" class="link external">&raquo;&nbsp;COM
    specification</a>.
    You might find some additional useful information in our FAQ for <a href="faq.com.php" class="xref">PHP and COM</a>.
    If you&#039;re thinking of using MS Office applications on the server side,
    you should read the information here: <a href="http://support.microsoft.com/kb/257757" class="link external">&raquo;&nbsp;Considerations for Server-Side Automation
    of Office</a>.
   </p> 
  </div>
 </div>

 


















































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.com-create-guid.php">com_create_guid</a> — Generate a globally unique identifier (GUID)</li><li><a href="function.com-event-sink.php">com_event_sink</a> — Connect events from a COM object to a PHP object</li><li><a href="function.com-get-active-object.php">com_get_active_object</a> — Returns a handle to an already running instance of a COM object</li><li><a href="function.com-load-typelib.php">com_load_typelib</a> — Loads a Typelib</li><li><a href="function.com-message-pump.php">com_message_pump</a> — Process COM messages, sleeping for up to timeoutms milliseconds</li><li><a href="function.com-print-typeinfo.php">com_print_typeinfo</a> — Print out a PHP class definition for a dispatchable interface</li><li><a href="function.variant-abs.php">variant_abs</a> — Returns the absolute value of a variant</li><li><a href="function.variant-add.php">variant_add</a> — &quot;Adds&quot; two variant values together and returns the result</li><li><a href="function.variant-and.php">variant_and</a> — Performs a bitwise AND operation between two variants</li><li><a href="function.variant-cast.php">variant_cast</a> — Convert a variant into a new variant object of another type</li><li><a href="function.variant-cat.php">variant_cat</a> — Concatenates two variant values together and returns the result</li><li><a href="function.variant-cmp.php">variant_cmp</a> — Compares two variants</li><li><a href="function.variant-date-from-timestamp.php">variant_date_from_timestamp</a> — Returns a variant date representation of a Unix timestamp</li><li><a href="function.variant-date-to-timestamp.php">variant_date_to_timestamp</a> — Converts a variant date/time value to Unix timestamp</li><li><a href="function.variant-div.php">variant_div</a> — Returns the result from dividing two variants</li><li><a href="function.variant-eqv.php">variant_eqv</a> — Performs a bitwise equivalence on two variants</li><li><a href="function.variant-fix.php">variant_fix</a> — Returns the integer portion of a variant</li><li><a href="function.variant-get-type.php">variant_get_type</a> — Returns the type of a variant object</li><li><a href="function.variant-idiv.php">variant_idiv</a> — Converts variants to integers and then returns the result from dividing them</li><li><a href="function.variant-imp.php">variant_imp</a> — Performs a bitwise implication on two variants</li><li><a href="function.variant-int.php">variant_int</a> — Returns the integer portion of a variant</li><li><a href="function.variant-mod.php">variant_mod</a> — Divides two variants and returns only the remainder</li><li><a href="function.variant-mul.php">variant_mul</a> — Multiplies the values of the two variants</li><li><a href="function.variant-neg.php">variant_neg</a> — Performs logical negation on a variant</li><li><a href="function.variant-not.php">variant_not</a> — Performs bitwise not negation on a variant</li><li><a href="function.variant-or.php">variant_or</a> — Performs a logical disjunction on two variants</li><li><a href="function.variant-pow.php">variant_pow</a> — Returns the result of performing the power function with two variants</li><li><a href="function.variant-round.php">variant_round</a> — Rounds a variant to the specified number of decimal places</li><li><a href="function.variant-set.php">variant_set</a> — Assigns a new value for a variant object</li><li><a href="function.variant-set-type.php">variant_set_type</a> — Convert a variant into another type &quot;in-place&quot;</li><li><a href="function.variant-sub.php">variant_sub</a> — Subtracts the value of the right variant from the left variant value</li><li><a href="function.variant-xor.php">variant_xor</a> — Performs a logical exclusion on two variants</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/com/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.com%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.com&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.com.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">31 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120122">  <div class="votes">
    <div id="Vu120122">
    <a href="/manual/vote-note.php?id=120122&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120122">
    <a href="/manual/vote-note.php?id=120122&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120122" title="72% like this...">
    10
    </div>
  </div>
  <a href="#120122" class="name">
  <strong class="user"><em>Sorin Negulescu</em></strong></a><a class="genanchor" href="#120122"> &para;</a><div class="date" title="2016-11-05 10:49"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120122">
<div class="phpcode"><code><span class="html">I have spent a lot of hours trying to make word.application work on a Windows Server using Apache as a service.<br />The application was working if Apache was started from command line (not as a service).<br /><br />In the hope that this will help others not to lose hours of trying to solve this problem here is what I found out:<br /><br />- In php.ini make sure you have the following key under the [COM_DOT_NET]: extension=php_com_dotnet.dll <br />- Apache shall run under a normal user account (not SYSTEM account). Run services.msc and fill-in the info of the user under the Apache service's Properties tab.<br />- Make sure you are able to start MS Word normally under that user account and dismiss all the dialogs that may appear (license, your info with initials, etc.). Start Word once again and make sure no dialogs appear.<br />- Launch dcomcnfg.exe-&gt;Console Root-&gt;Component Services-&gt;Computers-&gt;My Computer-&gt;DCOM Config-&gt;Microsoft Office Word 97 - 2003-&gt;Right Click(Properties)-&gt;Identity Tab and fill in the same user account information as for Apache service.<br />- If you cannot find the Microsoft Office Word 97 - 2003, make sure you are launching the correct DCOM Config (64 bit vs 32 bit) depending on what version of Office you have installed. To launch the 32 bit version run: mmc comexp.msc /32<br /><br />Before following the steps described above, the winword.exe app appears in task manager but, if you look at the memory consumption you can notice two things:<br />- it increases slowly<br />- it stops usually at about 7-8 MB.<br /><br />Keywords: COM, word.application, Apache, service, winword, timeout, no error</span></code></div>
  </div>
 </div>
  <div class="note" id="33082">  <div class="votes">
    <div id="Vu33082">
    <a href="/manual/vote-note.php?id=33082&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33082">
    <a href="/manual/vote-note.php?id=33082&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33082" title="80% like this...">
    3
    </div>
  </div>
  <a href="#33082" class="name">
  <strong class="user"><em>tomas dot pacl at atlas dot cz</em></strong></a><a class="genanchor" href="#33082"> &para;</a><div class="date" title="2003-06-16 06:07"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33082">
<div class="phpcode"><code><span class="html">Passing parameters by reference in PHP 4.3.2 (and in a future releases of PHP )
<br />
<br />In PHP 4.3.2 allow_call_time_pass_reference option is set to "Off" by default and future versions may not support this option any longer.
<br />Some COM functions has by-reference parameters. VARIANT object must be used to call this functions, but it would be passed without an '&amp;' before variable name.
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br />$myStringVariant </span><span class="keyword">= new </span><span class="default">VARIANT</span><span class="keyword">(</span><span class="string">"over-write me"</span><span class="keyword">, </span><span class="default">VT_BSTR</span><span class="keyword">);
<br />
<br /></span><span class="comment">/* works */
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$comobj</span><span class="keyword">-&gt;</span><span class="default">DoSomethingTo</span><span class="keyword">(</span><span class="default">$myStringVariant </span><span class="keyword">);
<br />
<br /></span><span class="comment">/* works only with allow_call_time_pass_reference option set to "On" and may not work in a future release of PHP */
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$comobj</span><span class="keyword">-&gt;</span><span class="default">DoSomethingTo</span><span class="keyword">(&amp;</span><span class="default">$myStringVariant </span><span class="keyword">);
<br />
<br /></span><span class="comment">/* The value in the variant can be retrieved by: */
<br /></span><span class="default">$theActualValue </span><span class="keyword">= </span><span class="default">$myStringVariant</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78361">  <div class="votes">
    <div id="Vu78361">
    <a href="/manual/vote-note.php?id=78361&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78361">
    <a href="/manual/vote-note.php?id=78361&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78361" title="62% like this...">
    4
    </div>
  </div>
  <a href="#78361" class="name">
  <strong class="user"><em>tomfmason at nospam-gmail dot com</em></strong></a><a class="genanchor" href="#78361"> &para;</a><div class="date" title="2007-10-08 07:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78361">
<div class="phpcode"><code><span class="html">To get the cpu load percentage you can do something like this.<br /><br /><span class="default">&lt;?php<br />$wmi </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'winmgmts://'</span><span class="keyword">);<br /></span><span class="default">$processor </span><span class="keyword">= </span><span class="default">$wmi</span><span class="keyword">-&gt;</span><span class="default">ExecQuery</span><span class="keyword">(</span><span class="string">"SELECT * FROM Win32_Processor"</span><span class="keyword">);<br />foreach(</span><span class="default">$processor </span><span class="keyword">as </span><span class="default">$obj</span><span class="keyword">){<br />    </span><span class="default">$cpu_load_time </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">LoadPercentage</span><span class="keyword">;<br />}<br />echo </span><span class="default">$cpu_load_time</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />reference <a href="http://msdn2.microsoft.com/en-us/library/aa394373.aspx" rel="nofollow" target="_blank">http://msdn2.microsoft.com/en-us/library/aa394373.aspx</a><br /><br />To list current apache instances<br /><br /><span class="default">&lt;?php<br />$wmi </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'winmgmts://'</span><span class="keyword">);<br /></span><span class="default">$processes </span><span class="keyword">= </span><span class="default">$wmi</span><span class="keyword">-&gt;</span><span class="default">ExecQuery</span><span class="keyword">(</span><span class="string">"SELECT * FROM Win32_Process WHERE Name = 'httpd.exe'"</span><span class="keyword">);<br />foreach(</span><span class="default">$processes </span><span class="keyword">as </span><span class="default">$process</span><span class="keyword">){<br />    echo </span><span class="default">$process</span><span class="keyword">-&gt;</span><span class="default">CommandLine </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    echo </span><span class="default">$process</span><span class="keyword">-&gt;</span><span class="default">ProcessId </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />reference <a href="http://msdn2.microsoft.com/en-us/library/aa394372.aspx" rel="nofollow" target="_blank">http://msdn2.microsoft.com/en-us/library/aa394372.aspx</a><br /><br />To run a php script in a background process<br /><br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= </span><span class="string">"C:\\path\\to\\dir"</span><span class="keyword">;<br /></span><span class="default">$php_path </span><span class="keyword">= </span><span class="string">"C:\\path\\to\\php.exe"</span><span class="keyword">;<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="string">"somescript.php"</span><span class="keyword">;<br /></span><span class="comment">//send time current timestamp<br /></span><span class="default">$cmd_options </span><span class="keyword">= </span><span class="string">"-t " </span><span class="keyword">. </span><span class="default">time</span><span class="keyword">();<br /></span><span class="default">$wscript </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'WScript.Shell'</span><span class="keyword">);<br /></span><span class="default">$wscript</span><span class="keyword">-&gt;</span><span class="default">Run</span><span class="keyword">(</span><span class="string">"cmd /K CD </span><span class="default">$php_path</span><span class="string"> </span><span class="default">$dir</span><span class="string">\\</span><span class="default">$file</span><span class="string">  &amp;  "</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Enjoy<br /><br />Tom</span></code></div>
  </div>
 </div>
  <div class="note" id="45038">  <div class="votes">
    <div id="Vu45038">
    <a href="/manual/vote-note.php?id=45038&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45038">
    <a href="/manual/vote-note.php?id=45038&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45038" title="61% like this...">
    4
    </div>
  </div>
  <a href="#45038" class="name">
  <strong class="user"><em>ferozzahid [at] usa [dot] com</em></strong></a><a class="genanchor" href="#45038"> &para;</a><div class="date" title="2004-08-24 12:06"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45038">
<div class="phpcode"><code><span class="html">To pass a parameter by reference to a COM function, you need to pass VARIANT to it. Common data types like integers and strings will not work for it.
<br />
<br />As an example, calling a function that retrieves the name of a person will look like:
<br />
<br /><span class="default">&lt;?php
<br />$Name </span><span class="keyword">= new </span><span class="default">VARIANT</span><span class="keyword">;
<br />
<br /></span><span class="default">$comobj </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"MyCOMOBj.Component"</span><span class="keyword">) or die(</span><span class="string">"Couldn't create the COM Component"</span><span class="keyword">);
<br />
<br />if(!</span><span class="default">$comobj</span><span class="keyword">-&gt;</span><span class="default">GetName</span><span class="keyword">(</span><span class="default">$Name</span><span class="keyword">)) {
<br />    echo(</span><span class="string">"Could not retrieve name"</span><span class="keyword">);
<br />}
<br />else {
<br />    echo(</span><span class="string">"The name retrieved is : " </span><span class="keyword">. </span><span class="default">$Name</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />$Name-&gt;type will contain the type of the value stored in the VARIANT e.g. VT_BSTR.
<br />
<br />Note For PHP 5:
<br />
<br />Insted of '$Name-&gt;value', we can use only '$Name' for getting the value stored in the VARIANT. To get the type of the value stored in the VARIANT, use 'variant_get_type($Name)'.
<br />
<br />Feroz Zahid</span></code></div>
  </div>
 </div>
  <div class="note" id="73791">  <div class="votes">
    <div id="Vu73791">
    <a href="/manual/vote-note.php?id=73791&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73791">
    <a href="/manual/vote-note.php?id=73791&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73791" title="60% like this...">
    1
    </div>
  </div>
  <a href="#73791" class="name">
  <strong class="user"><em>naveed at php dot net</em></strong></a><a class="genanchor" href="#73791"> &para;</a><div class="date" title="2007-03-10 05:24"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73791">
<div class="phpcode"><code><span class="html">Here is a spell check implementation that displays the suggestion list for each misspelled word.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">SpellCheck</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)<br />{<br />    </span><span class="default">$word</span><span class="keyword">=new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"word.application"</span><span class="keyword">) or die(</span><span class="string">"Cannot create Word object"</span><span class="keyword">);<br />    </span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Visible</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">WindowState</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">DisplayAlerts</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$doc</span><span class="keyword">=</span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">();<br />    </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">Content</span><span class="keyword">=</span><span class="default">$input</span><span class="keyword">;<br />    </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">CheckSpelling</span><span class="keyword">();<br />    </span><span class="default">$result</span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">SpellingErrors</span><span class="keyword">-&gt;</span><span class="default">Count</span><span class="keyword">;<br />    if(</span><span class="default">$result</span><span class="keyword">!=</span><span class="default">0</span><span class="keyword">)<br />    {<br />        echo </span><span class="string">"Input text contains misspelled words.\n\n"</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$result</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        {        <br />            echo </span><span class="string">"Original Word: " </span><span class="keyword">.</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">SpellingErrors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]-&gt;</span><span class="default">Text</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />            </span><span class="default">$list</span><span class="keyword">=</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">SpellingErrors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]-&gt;</span><span class="default">GetSpellingSuggestions</span><span class="keyword">();<br />            echo </span><span class="string">"Suggestions: "</span><span class="keyword">;<br />            for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt;= </span><span class="default">$list</span><span class="keyword">-&gt;</span><span class="default">Count</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />            {<br />                </span><span class="default">$correct</span><span class="keyword">=</span><span class="default">$list</span><span class="keyword">-&gt;</span><span class="default">Item</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">);<br />                echo </span><span class="default">$correct</span><span class="keyword">-&gt;</span><span class="default">Name</span><span class="keyword">.</span><span class="string">","</span><span class="keyword">;<br />            }<br />            echo </span><span class="string">"\n\n"</span><span class="keyword">;<br />        }<br />    }<br />    else<br />    {<br />        echo </span><span class="string">"No spelling mistakes found."</span><span class="keyword">;<br />    }<br />    </span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">ActiveDocument</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">();<br />    </span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Release</span><span class="keyword">();<br />    </span><span class="default">$word</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$str</span><span class="keyword">=</span><span class="string">"Hellu world. There is a spellling error in this sentence."</span><span class="keyword">;<br /></span><span class="default">SpellCheck</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37981">  <div class="votes">
    <div id="Vu37981">
    <a href="/manual/vote-note.php?id=37981&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37981">
    <a href="/manual/vote-note.php?id=37981&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37981" title="60% like this...">
    1
    </div>
  </div>
  <a href="#37981" class="name">
  <strong class="user"><em>alanraycom at el hogar dot net com</em></strong></a><a class="genanchor" href="#37981"> &para;</a><div class="date" title="2003-12-03 03:50"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37981">
<div class="phpcode"><code><span class="html">XSLT transformations using MSXML can be done with this code
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">xsltransform1</span><span class="keyword">(</span><span class="default">$xslpath</span><span class="keyword">,</span><span class="default">$xmlstring</span><span class="keyword">)
<br /> {
<br />  </span><span class="default">$xml</span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Microsoft.XMLDOM"</span><span class="keyword">);
<br />  </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">async</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />  </span><span class="comment">// $xmlstring is an xml string
<br />  </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$xmlstring</span><span class="keyword">);
<br />  </span><span class="default">$xsl </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Microsoft.XMLDOM"</span><span class="keyword">);
<br />  </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">async</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />  </span><span class="comment">// $xslpath is path to an xsl file
<br />  </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$xslpath</span><span class="keyword">);
<br />  </span><span class="default">$response</span><span class="keyword">=</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">transformNode</span><span class="keyword">(</span><span class="default">$xsl</span><span class="keyword">);
<br />  unset(</span><span class="default">$xml</span><span class="keyword">);
<br />  unset(</span><span class="default">$xsl</span><span class="keyword">);
<br />  return </span><span class="default">$response</span><span class="keyword">;
<br /> }
<br /></span><span class="default">?&gt;
<br /></span>
<br />enjoy
<br />Alan Young</span></code></div>
  </div>
 </div>
  <div class="note" id="19688">  <div class="votes">
    <div id="Vu19688">
    <a href="/manual/vote-note.php?id=19688&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19688">
    <a href="/manual/vote-note.php?id=19688&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19688" title="54% like this...">
    2
    </div>
  </div>
  <a href="#19688" class="name">
  <strong class="user"><em>madon at cma-it dot com</em></strong></a><a class="genanchor" href="#19688"> &para;</a><div class="date" title="2002-03-07 12:59"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19688">
<div class="phpcode"><code><span class="html">I thought this excel chart example could be useful.<br /><br />Note the use of Excel.application vs Excel.sheet.<br /><br />&lt;pre&gt;<br /><span class="default">&lt;?php<br />    </span><span class="keyword">print </span><span class="string">"Hi"</span><span class="keyword">;<br /></span><span class="comment">#Instantiate the spreadsheet component.<br />#    $ex = new COM("Excel.sheet") or Die ("Did not connect");<br /></span><span class="default">$exapp </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Excel.application"</span><span class="keyword">) or Die (</span><span class="string">"Did not connect"</span><span class="keyword">);<br /><br /></span><span class="comment">#Get the application name and version    <br /></span><span class="keyword">print </span><span class="string">"Application name:</span><span class="keyword">{</span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">Application</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">}</span><span class="string">&lt;BR&gt;" </span><span class="keyword">; <br />print </span><span class="string">"Loaded version: </span><span class="keyword">{</span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">Application</span><span class="keyword">-&gt;</span><span class="default">version</span><span class="keyword">}</span><span class="string">&lt;BR&gt;"</span><span class="keyword">; <br /><br /></span><span class="default">$wkb</span><span class="keyword">=</span><span class="default">$exapp</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">();<br /></span><span class="comment">#$wkb = $ex-&gt;Application-&gt;ActiveWorkbook or Die ("Did not open workbook"); <br /></span><span class="keyword">print </span><span class="string">"we opened workbook&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">Application</span><span class="keyword">-&gt;</span><span class="default">Visible </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">#Make Excel visible. <br /></span><span class="keyword">print </span><span class="string">"we made excell visible&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$sheets </span><span class="keyword">= </span><span class="default">$wkb</span><span class="keyword">-&gt;</span><span class="default">Worksheets</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); </span><span class="comment">#Select the sheet <br /></span><span class="keyword">print </span><span class="string">"selected a sheet&lt;BR&gt;"</span><span class="keyword">;<br /></span><span class="default">$sheets</span><span class="keyword">-&gt;</span><span class="default">activate</span><span class="keyword">; </span><span class="comment">#Activate it <br /></span><span class="keyword">print </span><span class="string">"activated sheet&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">#This is a new sheet<br /></span><span class="default">$sheets2 </span><span class="keyword">= </span><span class="default">$wkb</span><span class="keyword">-&gt;</span><span class="default">Worksheets</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(); </span><span class="comment">#Add a sheet <br /></span><span class="keyword">print </span><span class="string">"added a new sheet&lt;BR&gt;"</span><span class="keyword">;<br /></span><span class="default">$sheets2</span><span class="keyword">-&gt;</span><span class="default">activate</span><span class="keyword">; </span><span class="comment">#Activate it <br /></span><span class="keyword">print </span><span class="string">"activated sheet&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$sheets2</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">=</span><span class="string">"Report Second page"</span><span class="keyword">;<br /><br /></span><span class="default">$sheets</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">=</span><span class="string">"Report First page"</span><span class="keyword">;<br />print </span><span class="string">"We set a name to the sheet: </span><span class="default">$sheets</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="string">&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment"># fills a columns<br /></span><span class="default">$maxi</span><span class="keyword">=</span><span class="default">20</span><span class="keyword">;<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$maxi</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$cell </span><span class="keyword">= </span><span class="default">$sheets</span><span class="keyword">-&gt;</span><span class="default">Cells</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">) ; </span><span class="comment">#Select the cell (Row Column number) <br />    </span><span class="default">$cell</span><span class="keyword">-&gt;</span><span class="default">activate</span><span class="keyword">; </span><span class="comment">#Activate the cell <br />    </span><span class="default">$cell</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$i</span><span class="keyword">; </span><span class="comment">#Change it to 15000 <br /></span><span class="keyword">}<br /><br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">$sheets</span><span class="keyword">-&gt;</span><span class="default">chartobjects</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">); </span><span class="comment"># make a chartobject<br /><br /></span><span class="default">$chartje </span><span class="keyword">= </span><span class="default">$ch</span><span class="keyword">-&gt;</span><span class="default">chart</span><span class="keyword">; </span><span class="comment"># place a chart in the chart object <br /></span><span class="default">$chartje</span><span class="keyword">-&gt;</span><span class="default">activate</span><span class="keyword">; </span><span class="comment">#activate chartobject <br /></span><span class="default">$chartje</span><span class="keyword">-&gt;</span><span class="default">ChartType</span><span class="keyword">=</span><span class="default">63</span><span class="keyword">;<br /></span><span class="default">$selected </span><span class="keyword">= </span><span class="default">$sheets</span><span class="keyword">-&gt;</span><span class="default">range</span><span class="keyword">(</span><span class="string">"E1:E</span><span class="default">$maxi</span><span class="string">"</span><span class="keyword">); </span><span class="comment"># set the data the chart uses <br /></span><span class="default">$chartje</span><span class="keyword">-&gt;</span><span class="default">setsourcedata</span><span class="keyword">(</span><span class="default">$selected</span><span class="keyword">); </span><span class="comment"># set the data the chart uses <br /></span><span class="keyword">print </span><span class="string">"set the data the chart uses &lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$file_name</span><span class="keyword">=</span><span class="string">"D:/apache/Apache/htdocs/alm/tmp/final14.xls"</span><span class="keyword">;<br />if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">)) {</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">);}<br /></span><span class="comment">#$ex-&gt;Application-&gt;ActiveWorkbook-&gt;SaveAs($file_name); # saves sheet as final.xls <br /></span><span class="default">$wkb</span><span class="keyword">-&gt;</span><span class="default">SaveAs</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">); </span><span class="comment"># saves sheet as final.xls <br /></span><span class="keyword">print </span><span class="string">"saved&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">#$ex-&gt;Application-&gt;ActiveWorkbook-&gt;Close("False");    <br /></span><span class="default">$exapp</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">();<br />unset(</span><span class="default">$exapp</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />&lt;/pre&gt;<br /><br />Alex Madon</span></code></div>
  </div>
 </div>
  <div class="note" id="73229">  <div class="votes">
    <div id="Vu73229">
    <a href="/manual/vote-note.php?id=73229&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73229">
    <a href="/manual/vote-note.php?id=73229&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73229" title="57% like this...">
    1
    </div>
  </div>
  <a href="#73229" class="name">
  <strong class="user"><em>Francois-R dot Boyer at PolyMtl dot ca</em></strong></a><a class="genanchor" href="#73229"> &para;</a><div class="date" title="2007-02-13 08:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73229">
<div class="phpcode"><code><span class="html">I had the problem when trying to call Access VBA scripts from PHP; the call was working but Access would never quit.  The problem was that the Apache server is running as SYSTEM, and not a user we normally use to run Office.  And as the first time a user runs Office, it asked the SYSTEM user to enter its name and initials! ;-)
<br />
<br />To correct this problem: Stop Apache, go to Services, Apache, Properties, "Log On" tab, and check "Allow service to interact with desktop.  Restart Apache, then open your office application, in a page loaded by the Apache server, with a small PHP code like this, :
<br />
<br /><span class="default">&lt;?php
<br />$app </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Access.Application"</span><span class="keyword">); </span><span class="comment">// or Word.Application or Excel.Application ...
<br /></span><span class="default">$app</span><span class="keyword">-&gt;</span><span class="default">Visible </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// so that we see the window on screen
<br /></span><span class="default">?&gt;
<br /></span>
<br />Put the name you want and quit the application.  Now your Office application should terminate correctly the next time you load it with a COM object in PHP.  You can stop Apache uncheck the "Allow service to interact with desktop", and restart Apache if you like.  I don't even require a Quit or anything to be sent to Access, it quits automatically when PHP terminates.
<br />
<br />And for those who wish to know how I'm calling Access VBA scripts, instead of using ODBC or any other way to send SQL requests, which does not seem to work to call VBA scripts, I open the database as a COM object and it works fine:
<br />
<br /><span class="default">&lt;?php
<br />$db_com </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"pathname of the file.mdb"</span><span class="keyword">);
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$db_com</span><span class="keyword">-&gt;</span><span class="default">Application</span><span class="keyword">-&gt;</span><span class="default">Run</span><span class="keyword">(</span><span class="string">"function_name"</span><span class="keyword">, </span><span class="string">'param1'</span><span class="keyword">, </span><span class="string">'param2'</span><span class="keyword">, </span><span class="string">'...'</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63109">  <div class="votes">
    <div id="Vu63109">
    <a href="/manual/vote-note.php?id=63109&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63109">
    <a href="/manual/vote-note.php?id=63109&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63109" title="54% like this...">
    1
    </div>
  </div>
  <a href="#63109" class="name">
  <strong class="user"><em>a dot kulikov at pool4tool dot com</em></strong></a><a class="genanchor" href="#63109"> &para;</a><div class="date" title="2006-03-13 09:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63109">
<div class="phpcode"><code><span class="html">In case you are wondering how to group rows or columns in the freshly created EXCEL files, then this may help you
<br />
<br /><span class="default">&lt;?php
<br />   </span><span class="comment">/***
<br />    * Grouping Rows optically in Excel Using a COM Object
<br />    *
<br />    * That was not easy, I have spent several hours of trial and error to get
<br />    * this thing to work!!!
<br />    *
<br />    * @author Kulikov Alexey &lt;a.kulikov@gmail.com&gt;
<br />    * @since  13.03.2006
<br />    *
<br />    * @see    Open Excel, Hit Alt+F11, thne Hit F2 -- this is your COM bible
<br />    ***/
<br />
<br />   //starting excel
<br />   </span><span class="default">$excel </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"excel.application"</span><span class="keyword">) or die(</span><span class="string">"Unable to instanciate excel"</span><span class="keyword">);
<br />   print </span><span class="string">"Loaded excel, version </span><span class="keyword">{</span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Version</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;
<br />
<br />   </span><span class="comment">//bring it to front
<br />   #$excel-&gt;Visible = 1;//NOT
<br />
<br />   //dont want alerts ... run silent
<br />   </span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">DisplayAlerts </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />   </span><span class="comment">//create a new workbook
<br />   </span><span class="default">$wkb </span><span class="keyword">= </span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">();
<br />
<br />   </span><span class="comment">//select the default sheet
<br />   </span><span class="default">$sheet</span><span class="keyword">=</span><span class="default">$wkb</span><span class="keyword">-&gt;</span><span class="default">Worksheets</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />
<br />   </span><span class="comment">//make it the active sheet
<br />   </span><span class="default">$sheet</span><span class="keyword">-&gt;</span><span class="default">activate</span><span class="keyword">;
<br />
<br />   </span><span class="comment">//fill it with some bogus data
<br />   </span><span class="keyword">for(</span><span class="default">$row</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$row</span><span class="keyword">&lt;=</span><span class="default">7</span><span class="keyword">;</span><span class="default">$row</span><span class="keyword">++){
<br />       for (</span><span class="default">$col</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$col</span><span class="keyword">&lt;=</span><span class="default">5</span><span class="keyword">;</span><span class="default">$col</span><span class="keyword">++){
<br />
<br />          </span><span class="default">$sheet</span><span class="keyword">-&gt;</span><span class="default">activate</span><span class="keyword">;
<br />          </span><span class="default">$cell</span><span class="keyword">=</span><span class="default">$sheet</span><span class="keyword">-&gt;</span><span class="default">Cells</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">,</span><span class="default">$col</span><span class="keyword">);
<br />          </span><span class="default">$cell</span><span class="keyword">-&gt;</span><span class="default">Activate</span><span class="keyword">;
<br />          </span><span class="default">$cell</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="string">'pool4tool 4eva ' </span><span class="keyword">. </span><span class="default">$row </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$col </span><span class="keyword">. </span><span class="string">' ak'</span><span class="keyword">;
<br />       }</span><span class="comment">//end of colcount for loop
<br />   </span><span class="keyword">}
<br />
<br />   </span><span class="comment">///////////
<br />   // Select Rows 2 to 5
<br />   </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$sheet</span><span class="keyword">-&gt;</span><span class="default">Range</span><span class="keyword">(</span><span class="string">"2:5"</span><span class="keyword">)-&gt;</span><span class="default">Rows</span><span class="keyword">;
<br />
<br />   </span><span class="comment">// group them baby, yeah
<br />   </span><span class="default">$r</span><span class="keyword">-&gt;</span><span class="default">Cells</span><span class="keyword">-&gt;</span><span class="default">Group</span><span class="keyword">;
<br />
<br />   </span><span class="comment">// save the new file
<br />   </span><span class="default">$strPath </span><span class="keyword">= </span><span class="string">'tfile.xls'</span><span class="keyword">;
<br />   if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$strPath</span><span class="keyword">)) {</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$strPath</span><span class="keyword">);}
<br />   </span><span class="default">$wkb</span><span class="keyword">-&gt;</span><span class="default">SaveAs</span><span class="keyword">(</span><span class="default">$strPath</span><span class="keyword">);
<br />
<br />   </span><span class="comment">//close the book
<br />   </span><span class="default">$wkb</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);
<br />   </span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">();
<br />
<br />   </span><span class="comment">//free up the RAM
<br />   </span><span class="keyword">unset(</span><span class="default">$sheet</span><span class="keyword">);
<br />
<br />   </span><span class="comment">//closing excel
<br />   </span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">();
<br />
<br />   </span><span class="comment">//free the object
<br />   </span><span class="default">$excel </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62629">  <div class="votes">
    <div id="Vu62629">
    <a href="/manual/vote-note.php?id=62629&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62629">
    <a href="/manual/vote-note.php?id=62629&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62629" title="54% like this...">
    1
    </div>
  </div>
  <a href="#62629" class="name">
  <strong class="user"><em>Pedro Heliodoro</em></strong></a><a class="genanchor" href="#62629"> &para;</a><div class="date" title="2006-03-05 02:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62629">
<div class="phpcode"><code><span class="html">Using the Windows Media Player OCX and the latest snap of PHP 5.1 i was able to eject a CD-ROM drive<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//create an instance of Windows Media Player<br /></span><span class="default">$mp </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"WMPlayer.OCX"</span><span class="keyword">);<br /></span><span class="comment">//ejects the first cd-rom on the drive list<br /></span><span class="default">$mp</span><span class="keyword">-&gt;</span><span class="default">cdromcollection</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">eject</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70101">  <div class="votes">
    <div id="Vu70101">
    <a href="/manual/vote-note.php?id=70101&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70101">
    <a href="/manual/vote-note.php?id=70101&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70101" title="100% like this...">
    2
    </div>
  </div>
  <a href="#70101" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#70101"> &para;</a><div class="date" title="2006-10-03 04:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70101">
<div class="phpcode"><code><span class="html">If someone want to get a COM object out of a DCOM object can do something like that:<br /><br /><span class="default">&lt;?php<br />  $dcom_obj </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'dacom.object'</span><span class="keyword">,</span><span class="string">'remotehost'</span><span class="keyword">) or die(</span><span class="string">"Unable to get DCOM object!"</span><span class="keyword">);<br />  </span><span class="default">$com_obj </span><span class="keyword">= new </span><span class="default">Variant</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">);<br />  </span><span class="default">$dcom_obj</span><span class="keyword">-&gt;</span><span class="default">Get_Module</span><span class="keyword">(</span><span class="default">$com_obj</span><span class="keyword">); </span><span class="comment">//user function which returns a custom IDispatch (casted as variant*)<br /></span><span class="default">?&gt;<br /></span><br />Hopefully this will help someone, because it took me quite long to figure this out.</span></code></div>
  </div>
 </div>
  <div class="note" id="42496">  <div class="votes">
    <div id="Vu42496">
    <a href="/manual/vote-note.php?id=42496&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42496">
    <a href="/manual/vote-note.php?id=42496&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42496" title="100% like this...">
    2
    </div>
  </div>
  <a href="#42496" class="name">
  <strong class="user"><em>angelo [at] mandato &lt;dot&gt; com</em></strong></a><a class="genanchor" href="#42496"> &para;</a><div class="date" title="2004-05-18 04:30"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42496">
<div class="phpcode"><code><span class="html">Useful PHP functions I created (similar to other standard PHP database functions) for working with an ADO datasource:<br /><span class="default">&lt;?php<br />    </span><span class="comment">// ado.inc.php<br />    <br />    </span><span class="default">$ADO_NUM </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$ADO_ASSOC </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">$ADO_BOTH </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />    <br />    function </span><span class="default">ado_connect</span><span class="keyword">( </span><span class="default">$dsn </span><span class="keyword">)<br />    {<br />        </span><span class="default">$link </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"ADODB.Connection"</span><span class="keyword">);<br />        </span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">Open</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">);<br />        return </span><span class="default">$link</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_close</span><span class="keyword">( </span><span class="default">$link </span><span class="keyword">)<br />    {<br />        </span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">();<br />    }<br />    <br />    function </span><span class="default">ado_num_fields</span><span class="keyword">( </span><span class="default">$rs </span><span class="keyword">)<br />    {<br />        return </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">-&gt;</span><span class="default">Count</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_error</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">Errors</span><span class="keyword">[</span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">Errors</span><span class="keyword">-&gt;</span><span class="default">Count</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">Number</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_errormsg</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">Errors</span><span class="keyword">[</span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">Errors</span><span class="keyword">-&gt;</span><span class="default">Count</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">Description</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_fetch_array</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">, </span><span class="default">$result_type</span><span class="keyword">,  </span><span class="default">$row_number </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">)<br />    {<br />        global </span><span class="default">$ADO_NUM</span><span class="keyword">, </span><span class="default">$ADO_ASSOC</span><span class="keyword">, </span><span class="default">$ADO_BOTH</span><span class="keyword">;<br />        if( </span><span class="default">$row_number </span><span class="keyword">&gt; -</span><span class="default">1 </span><span class="keyword">) </span><span class="comment">// Defined in adoint.h - adBookmarkFirst    = 1<br />            </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Move</span><span class="keyword">( </span><span class="default">$row_number</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br />        <br />        if( </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">EOF </span><span class="keyword">)<br />            return </span><span class="default">false</span><span class="keyword">;<br />        <br />        </span><span class="default">$ToReturn </span><span class="keyword">= array();<br />        for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">ado_num_fields</span><span class="keyword">(</span><span class="default">$rs</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++ )<br />        {<br />            if( </span><span class="default">$result_type </span><span class="keyword">== </span><span class="default">$ADO_NUM </span><span class="keyword">|| </span><span class="default">$result_type </span><span class="keyword">== </span><span class="default">$ADO_BOTH </span><span class="keyword">)<br />                </span><span class="default">$ToReturn</span><span class="keyword">[ </span><span class="default">$x </span><span class="keyword">] = </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]-&gt;</span><span class="default">Value</span><span class="keyword">;<br />            if( </span><span class="default">$result_type </span><span class="keyword">== </span><span class="default">$ADO_ASSOC </span><span class="keyword">|| </span><span class="default">$result_type </span><span class="keyword">== </span><span class="default">$ADO_BOTH </span><span class="keyword">)<br />                </span><span class="default">$ToReturn</span><span class="keyword">[ </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]-&gt;</span><span class="default">Name </span><span class="keyword">] = </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]-&gt;</span><span class="default">Value</span><span class="keyword">;<br />        }<br />        </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">MoveNext</span><span class="keyword">();<br />        return </span><span class="default">$ToReturn</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_num_rows</span><span class="keyword">( </span><span class="default">$rs </span><span class="keyword">)<br />    {<br />        return </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">RecordCount</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_free_result</span><span class="keyword">( </span><span class="default">$rs </span><span class="keyword">)<br />    {<br />        </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">();<br />    }<br />    <br />    function </span><span class="default">ado_query</span><span class="keyword">( </span><span class="default">$link</span><span class="keyword">, </span><span class="default">$query </span><span class="keyword">)<br />    {<br />        return </span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">Execute</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br />    }<br />    <br />    function </span><span class="default">ado_fetch_assoc</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">,  </span><span class="default">$row_number </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">)<br />    {<br />        global </span><span class="default">$ADO_ASSOC</span><span class="keyword">;<br />        return  </span><span class="default">ado_fetch_array</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">, </span><span class="default">$ADO_ASSOC</span><span class="keyword">, </span><span class="default">$row_number</span><span class="keyword">);<br />    }<br />    <br />    function </span><span class="default">ado_fetch_row</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">,  </span><span class="default">$row_number </span><span class="keyword">= -</span><span class="default">1 </span><span class="keyword">)<br />    {<br />        global </span><span class="default">$ADO_NUM</span><span class="keyword">;<br />        return </span><span class="default">ado_fetch_array</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">, </span><span class="default">$ADO_NUM</span><span class="keyword">, </span><span class="default">$row_number</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// Extra functions:<br />    </span><span class="keyword">function </span><span class="default">ado_field_len</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">, </span><span class="default">$field_number </span><span class="keyword">)<br />    {<br />        return </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">[</span><span class="default">$field_number</span><span class="keyword">]-&gt;</span><span class="default">Precision</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_field_name</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">, </span><span class="default">$field_number </span><span class="keyword">)<br />    {<br />        return </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">[</span><span class="default">$field_number</span><span class="keyword">]-&gt;</span><span class="default">Name</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_field_scale</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">, </span><span class="default">$field_number </span><span class="keyword">)<br />    {<br />        return </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">[</span><span class="default">$field_number</span><span class="keyword">]-&gt;</span><span class="default">NumericScale</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">ado_field_type</span><span class="keyword">( </span><span class="default">$rs</span><span class="keyword">, </span><span class="default">$field_number </span><span class="keyword">)<br />    {<br />        return </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">[</span><span class="default">$field_number</span><span class="keyword">]-&gt;</span><span class="default">Type</span><span class="keyword">;<br />    }<br />    <br /></span><span class="default">?&gt;<br /></span><br />The aod version was a typo.</span></code></div>
  </div>
 </div>
  <div class="note" id="80074">  <div class="votes">
    <div id="Vu80074">
    <a href="/manual/vote-note.php?id=80074&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80074">
    <a href="/manual/vote-note.php?id=80074&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80074" title="100% like this...">
    1
    </div>
  </div>
  <a href="#80074" class="name">
  <strong class="user"><em>monica at digitaldesignservices dot com</em></strong></a><a class="genanchor" href="#80074"> &para;</a><div class="date" title="2007-12-27 02:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80074">
<div class="phpcode"><code><span class="html">Working with Word 2003 COM object.  <br /><br />Have you been trying to work with the Word.Application COM and the Word Document would crash and the PHP script would hang?  <br /><br />Turns out that there is an issue within the Office COM object that doesn't let the web application (IIS, Apache) scripting engine release the object after instancing the COM.  The Service Pack 3 office update claims to remedy this.  Will test and post findings.</span></code></div>
  </div>
 </div>
  <div class="note" id="57279">  <div class="votes">
    <div id="Vu57279">
    <a href="/manual/vote-note.php?id=57279&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57279">
    <a href="/manual/vote-note.php?id=57279&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57279" title="100% like this...">
    1
    </div>
  </div>
  <a href="#57279" class="name">
  <strong class="user"><em>allan666 at gmail dot com</em></strong></a><a class="genanchor" href="#57279"> &para;</a><div class="date" title="2005-09-29 03:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57279">
<div class="phpcode"><code><span class="html">If you are using a COM object that opens windows or dialogs (like Office applications), those windows or dialogs will not appear and will stay invisible even if you use codes like     <br /><br />$word-&gt;visible = true;<br /><br />To solve this problem, go to the web service properties (Administrative Tools) and click (in the Logon TAB) "Allow the Service to Iterate with desktop".<br /><br />This explain lots of problems to close applications. When you try to close, the dialos asking to save the file must appear, but only in the option to iterate with desktop is on.<br /><br />Hope it helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="52193">  <div class="votes">
    <div id="Vu52193">
    <a href="/manual/vote-note.php?id=52193&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52193">
    <a href="/manual/vote-note.php?id=52193&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52193" title="100% like this...">
    1
    </div>
  </div>
  <a href="#52193" class="name">
  <strong class="user"><em>bruce at yourweb dot com dot au</em></strong></a><a class="genanchor" href="#52193"> &para;</a><div class="date" title="2005-04-23 05:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52193">
<div class="phpcode"><code><span class="html">Simple convert xls to csv<br /><span class="default">&lt;?php<br /></span><span class="comment">// starting excel <br /></span><span class="default">$excel </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"excel.application"</span><span class="keyword">) or die(</span><span class="string">"Unable to instanciate excel"</span><span class="keyword">); <br />print </span><span class="string">"Loaded excel, version </span><span class="keyword">{</span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Version</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">; <br /><br /></span><span class="comment">//bring it to front <br />#$excel-&gt;Visible = 1;//NOT<br />//dont want alerts ... run silent <br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">DisplayAlerts </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br /><br /></span><span class="comment">//open  document <br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">Open</span><span class="keyword">(</span><span class="string">"C:\\mydir\\myfile.xls"</span><span class="keyword">); <br /></span><span class="comment">//XlFileFormat.xlcsv file format is 6<br />//saveas command (file,format ......)<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">SaveAs</span><span class="keyword">(</span><span class="string">"c:\\mydir\\myfile.csv"</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">); <br /><br /></span><span class="comment">//closing excel <br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">(); <br /><br /></span><span class="comment">//free the object <br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Release</span><span class="keyword">(); <br /></span><span class="default">$excel </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">; <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50287">  <div class="votes">
    <div id="Vu50287">
    <a href="/manual/vote-note.php?id=50287&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50287">
    <a href="/manual/vote-note.php?id=50287&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50287" title="100% like this...">
    1
    </div>
  </div>
  <a href="#50287" class="name">
  <strong class="user"><em>michael at example dot com</em></strong></a><a class="genanchor" href="#50287"> &para;</a><div class="date" title="2005-02-23 12:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50287">
<div class="phpcode"><code><span class="html">After alot of trouble with IIS 6/Windows 2003 and PHP 5.0.2 I figured out how to use Imagemagick COM+/OLE interface. Seems you have to recreate the COM object after each convert() otherwise it will sometimes fail with very strange errors, since the PHP COM interface is not as stable as the old ASP one apparently is.</span></code></div>
  </div>
 </div>
  <div class="note" id="48775">  <div class="votes">
    <div id="Vu48775">
    <a href="/manual/vote-note.php?id=48775&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48775">
    <a href="/manual/vote-note.php?id=48775&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48775" title="100% like this...">
    1
    </div>
  </div>
  <a href="#48775" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#48775"> &para;</a><div class="date" title="2005-01-06 09:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48775">
<div class="phpcode"><code><span class="html">if you want to add a new hyperlink with excel :
<br />
<br /><span class="default">&lt;?php
<br />$cell</span><span class="keyword">=</span><span class="default">$sheet</span><span class="keyword">-&gt;</span><span class="default">Range</span><span class="keyword">(</span><span class="string">'O'</span><span class="keyword">.</span><span class="default">$j</span><span class="keyword">);
<br /></span><span class="default">$cell</span><span class="keyword">-&gt;</span><span class="default">Hyperlinks</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">(</span><span class="default">$cell </span><span class="keyword">,</span><span class="string">'here_your_file'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />I write this note because is very difficult to find 
<br />the good method to do that .
<br />
<br />Merci beaucoup</span></code></div>
  </div>
 </div>
  <div class="note" id="44625">  <div class="votes">
    <div id="Vu44625">
    <a href="/manual/vote-note.php?id=44625&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44625">
    <a href="/manual/vote-note.php?id=44625&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44625" title="100% like this...">
    1
    </div>
  </div>
  <a href="#44625" class="name">
  <strong class="user"><em>Shawn Coppock</em></strong></a><a class="genanchor" href="#44625"> &para;</a><div class="date" title="2004-08-11 01:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44625">
<div class="phpcode"><code><span class="html">For those of us that are not experts with object models, if you have Microsoft Excel or Microsoft Word available, go into the Visual Basic Editor (Alt+F11). Now you can open the object browser window (F2) and see what you find.
<br />
<br />If you select "Word" in the object browser, then the classes and members of that class are displayed below. For example, if you click on "Selection" in the classes column, and then "Font" in the members column, you will then see "Property Font As Font Member of Word.Selection" displayed at the bottom. Click on the "Font" link there.
<br />
<br />Click on Word "Selection" again in the classes column, and then "PageSetup" in the members column, you will then see "Property PageSetup As PageSetup Member of word.Selection" displayed at the bottom. Click on the "PageSetup" link there.
<br />
<br />Using the above examples, you can now formulate your Word Document from php. Here is a simple example that creates a 1 &amp; 1/2" space for text based on the margin settings &amp; with dark red text and an 8pt Helvetica font face:
<br />
<br /><span class="default">&lt;?php
<br />$content </span><span class="keyword">= </span><span class="string">"Insert Sample Text Here\n\nThis starts a new paragraph line."</span><span class="keyword">;
<br /></span><span class="default">$word</span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"word.application"</span><span class="keyword">) or die(</span><span class="string">"Unable to create Word document"</span><span class="keyword">); 
<br />print </span><span class="string">"Loaded Word, version </span><span class="keyword">{</span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Version</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">; 
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Visible </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; 
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">(); 
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">PageSetup</span><span class="keyword">-&gt;</span><span class="default">LeftMargin </span><span class="keyword">= </span><span class="string">'3"'</span><span class="keyword">;
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">PageSetup</span><span class="keyword">-&gt;</span><span class="default">RightMargin </span><span class="keyword">= </span><span class="string">'4"'</span><span class="keyword">;
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">Font</span><span class="keyword">-&gt;</span><span class="default">Name </span><span class="keyword">= </span><span class="string">'Helvetica'</span><span class="keyword">;
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">Font</span><span class="keyword">-&gt;</span><span class="default">Size </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">Font</span><span class="keyword">-&gt;</span><span class="default">ColorIndex</span><span class="keyword">= </span><span class="default">13</span><span class="keyword">; </span><span class="comment">//wdDarkRed = 13
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">TypeText</span><span class="keyword">(</span><span class="string">"</span><span class="default">$content</span><span class="string">"</span><span class="keyword">); 
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">SaveAs</span><span class="keyword">(</span><span class="string">"some_tst.doc"</span><span class="keyword">); 
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">quit</span><span class="keyword">(); 
<br />echo </span><span class="string">"done"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />This example (and others) worked for me with Microsoft Word 10.0 Object Library (MS Word 2002), Apache &amp; PHP on Windows XP. Experimenting using the Visual Basic editor will yield some amazing documents from PHP as it will help you see the relationships of the objects used and give you an idea as to how to construct your code. But be prepared for an occaisional PHP.exe crash if your code is way off base.
<br />
<br />Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="40335">  <div class="votes">
    <div id="Vu40335">
    <a href="/manual/vote-note.php?id=40335&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40335">
    <a href="/manual/vote-note.php?id=40335&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40335" title="100% like this...">
    1
    </div>
  </div>
  <a href="#40335" class="name">
  <strong class="user"><em>mark dickens at mindspring dot com</em></strong></a><a class="genanchor" href="#40335"> &para;</a><div class="date" title="2004-02-29 08:03"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40335">
<div class="phpcode"><code><span class="html">Just a note to those wanting to use COM to interface to printers under Windows 2000/XP.  If it doesn't work or seems to hang, try changing the logon identity under which the Apache (assuming you're using Apache) service is running from the System account to another account.  By default most services will install to run under the System account and although the System account has total authority on the computer it is running on, it has no authority outside of that realm as I understand it.  Apparently accessing printers is considered "outside the realm".  I used this technique to interface a Dymo thermal label printer to my server and it works now.</span></code></div>
  </div>
 </div>
  <div class="note" id="37901">  <div class="votes">
    <div id="Vu37901">
    <a href="/manual/vote-note.php?id=37901&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37901">
    <a href="/manual/vote-note.php?id=37901&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37901" title="100% like this...">
    1
    </div>
  </div>
  <a href="#37901" class="name">
  <strong class="user"><em>chris at hitcatcher dot com</em></strong></a><a class="genanchor" href="#37901"> &para;</a><div class="date" title="2003-12-01 04:19"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37901">
<div class="phpcode"><code><span class="html">Many COM objects don't do well when passing long (win32) filenames as function parameters.  You can get the 8.3 name of the folder or file on *most* (some win platforms don't support it, and it can be toggled off in the registry for performance reasons) servers using the following:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//create FSO instance<br /></span><span class="default">$exFSO </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Scripting.FileSystemObject"</span><span class="keyword">) or die (</span><span class="string">"Could not create Scripting.FileSystemObject"</span><span class="keyword">);<br /><br /></span><span class="comment">//set vars<br /></span><span class="default">$myDir </span><span class="keyword">= </span><span class="string">"C:\\Program Files\\"</span><span class="keyword">;<br /></span><span class="default">$myFile </span><span class="keyword">= </span><span class="string">"a long file name.txt"</span><span class="keyword">;<br /><br /></span><span class="comment">//get folder &amp; file objects<br /></span><span class="default">$exDir </span><span class="keyword">= </span><span class="default">$exFSO</span><span class="keyword">-&gt;</span><span class="default">GetFolder</span><span class="keyword">(</span><span class="default">$myDir</span><span class="keyword">);<br /></span><span class="default">$exFile </span><span class="keyword">= </span><span class="default">$exFSO</span><span class="keyword">-&gt;</span><span class="default">GetFile</span><span class="keyword">(</span><span class="default">$myDir </span><span class="keyword">. </span><span class="default">$myFile</span><span class="keyword">);<br />echo </span><span class="default">$exDir</span><span class="keyword">-&gt;</span><span class="default">ShortPath</span><span class="keyword">;<br />echo </span><span class="default">$exFile</span><span class="keyword">-&gt;</span><span class="default">ShortPath</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37700">  <div class="votes">
    <div id="Vu37700">
    <a href="/manual/vote-note.php?id=37700&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37700">
    <a href="/manual/vote-note.php?id=37700&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37700" title="100% like this...">
    1
    </div>
  </div>
  <a href="#37700" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#37700"> &para;</a><div class="date" title="2003-11-23 09:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37700">
<div class="phpcode"><code><span class="html">Here is an example of reading the custom properties like Author, Keywords, etc. which are stored in MS Office and other Windows files. You must install and register dsofile as described at <a href="http://support.microsoft.com/default.aspx?scid=kb;EN-US;Q224351." rel="nofollow" target="_blank">http://support.microsoft.com/default.aspx?scid=kb;EN-US;Q224351.</a> The .frm file in that distribution lists most of the available properties. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// the file you wish to access
<br /></span><span class="default">$fn </span><span class="keyword">= </span><span class="string">'/docs/MFA.xls'</span><span class="keyword">;
<br />
<br /></span><span class="default">$oFilePropReader </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'DSOleFile.PropertyReader'</span><span class="keyword">);
<br /></span><span class="default">$props </span><span class="keyword">= </span><span class="default">$oFilePropReader</span><span class="keyword">-&gt;</span><span class="default">GetDocumentProperties</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">);
<br />
<br /></span><span class="comment">// one syntax
<br /></span><span class="default">$au </span><span class="keyword">= </span><span class="default">com_get</span><span class="keyword">(</span><span class="default">$props</span><span class="keyword">, </span><span class="string">'Author'</span><span class="keyword">);
<br />print </span><span class="string">"au: </span><span class="default">$au</span><span class="string"> \n"</span><span class="keyword">;
<br />
<br /></span><span class="comment">//another syntax
<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">'LastEditedBy'</span><span class="keyword">;
<br /></span><span class="default">$lsb </span><span class="keyword">= </span><span class="default">$props</span><span class="keyword">-&gt;</span><span class="default">$str</span><span class="keyword">;
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$lsb</span><span class="keyword">);
<br />
<br /></span><span class="comment">// set a property if you wish
<br /></span><span class="keyword">if (!</span><span class="default">$props</span><span class="keyword">-&gt;</span><span class="default">IsReadOnly</span><span class="keyword">()) {
<br />  </span><span class="default">$props</span><span class="keyword">-&gt;</span><span class="default">Subject </span><span class="keyword">= </span><span class="string">'tlc'</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35580">  <div class="votes">
    <div id="Vu35580">
    <a href="/manual/vote-note.php?id=35580&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35580">
    <a href="/manual/vote-note.php?id=35580&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35580" title="100% like this...">
    1
    </div>
  </div>
  <a href="#35580" class="name">
  <strong class="user"><em>php at dictim dot com</em></strong></a><a class="genanchor" href="#35580"> &para;</a><div class="date" title="2003-09-06 01:17"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35580">
<div class="phpcode"><code><span class="html">This took me days to work out how to do so I gotta share it:
<br />
<br />How to get the word count from a MS Word Document:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">#Instantiate the Word component.
<br />
<br /></span><span class="default">$word </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"word.application"</span><span class="keyword">) or die(</span><span class="string">"Unable to instantiate Word"</span><span class="keyword">); 
<br />
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Visible </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; 
<br />
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">-&gt;</span><span class="default">Open</span><span class="keyword">(</span><span class="string">"c:/anydocument.doc"</span><span class="keyword">);
<br /></span><span class="default">$temp </span><span class="keyword">= </span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Dialogs</span><span class="keyword">-&gt;</span><span class="default">Item</span><span class="keyword">(</span><span class="default">228</span><span class="keyword">);
<br /></span><span class="default">$temp</span><span class="keyword">-&gt;</span><span class="default">Execute</span><span class="keyword">();
<br /></span><span class="default">$numwords </span><span class="keyword">= </span><span class="default">$temp</span><span class="keyword">-&gt;</span><span class="default">Words</span><span class="keyword">();
<br />
<br />echo </span><span class="default">$numwords</span><span class="keyword">;
<br />
<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">(); 
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note that this is the only way to get the word count accurately:
<br />$word-&gt;ActiveDocument-&gt;Words-&gt;Count;
<br />Will see all carriage returns and punctuation as words so is wildy innaccurate.</span></code></div>
  </div>
 </div>
  <div class="note" id="25521">  <div class="votes">
    <div id="Vu25521">
    <a href="/manual/vote-note.php?id=25521&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25521">
    <a href="/manual/vote-note.php?id=25521&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25521" title="100% like this...">
    1
    </div>
  </div>
  <a href="#25521" class="name">
  <strong class="user"><em>tedknightusa at hotmail dot com</em></strong></a><a class="genanchor" href="#25521"> &para;</a><div class="date" title="2002-09-26 09:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25521">
<div class="phpcode"><code><span class="html">A Notes example:
<br />
<br /><span class="default">&lt;?php
<br />$session </span><span class="keyword">= new </span><span class="default">COM </span><span class="string">"Lotus.NotesSession" </span><span class="keyword">);
<br /></span><span class="default">$session</span><span class="keyword">-&gt;</span><span class="default">Initialize</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">); 
<br />    
<br /></span><span class="default">$someDB </span><span class="keyword">= </span><span class="string">"C:\Lotus\Notes\Data\somedb.nsf"</span><span class="keyword">;
<br /></span><span class="default">$db </span><span class="keyword">= </span><span class="default">$session</span><span class="keyword">-&gt;</span><span class="default">GetDatabase</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">$someDB</span><span class="keyword">) or die(</span><span class="string">"Cannot get someDB.nsf"</span><span class="keyword">);
<br /></span><span class="default">$view </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">GetView</span><span class="keyword">(</span><span class="string">"some_view"</span><span class="keyword">) or die(</span><span class="string">"Some View not found"</span><span class="keyword">);
<br />
<br /></span><span class="default">$doc </span><span class="keyword">= </span><span class="default">$view</span><span class="keyword">-&gt;</span><span class="default">GetFirstDocument</span><span class="keyword">() or die(</span><span class="string">"Unable to get Initial Some Document"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// loop through
<br /></span><span class="keyword">while(</span><span class="default">$doc</span><span class="keyword">){
<br />  </span><span class="default">$col_vals </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">ColumnValues</span><span class="keyword">();
<br />  echo </span><span class="default">$col_vals</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />  </span><span class="default">$doc </span><span class="keyword">= </span><span class="default">$view</span><span class="keyword">-&gt;</span><span class="default">GetNextDocument</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85494">  <div class="votes">
    <div id="Vu85494">
    <a href="/manual/vote-note.php?id=85494&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85494">
    <a href="/manual/vote-note.php?id=85494&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85494" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85494" class="name">
  <strong class="user"><em>larrywalker at at  chelseagroton dot com</em></strong></a><a class="genanchor" href="#85494"> &para;</a><div class="date" title="2008-09-02 08:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85494">
<div class="phpcode"><code><span class="html">To run a php script in a background process and pass it you var use 
<br />
<br /><span class="default">&lt;?php
<br />
<br />$WshShell </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"WScript.Shell"</span><span class="keyword">);
<br /></span><span class="default">$oExec </span><span class="keyword">= </span><span class="default">$WshShell</span><span class="keyword">-&gt;</span><span class="default">Run</span><span class="keyword">(</span><span class="string">"c:\\xampp\\php\\php.exe 
<br />
<br />c:\\xampp\\Not_on_Web\\ftptestback.php --user=</span><span class="default">$username</span><span class="string">"</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Works for me.</span></code></div>
  </div>
 </div>
  <div class="note" id="68208">  <div class="votes">
    <div id="Vu68208">
    <a href="/manual/vote-note.php?id=68208&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68208">
    <a href="/manual/vote-note.php?id=68208&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68208" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68208" class="name">
  <strong class="user"><em>kiotech at hotmail dot com</em></strong></a><a class="genanchor" href="#68208"> &para;</a><div class="date" title="2006-07-18 06:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68208">
<div class="phpcode"><code><span class="html">For use parameters with PHP this is a Code Example
<br />
<br /><span class="default">&lt;?php
<br />$ObjectFactory</span><span class="keyword">= New </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"CrystalReports11.ObjectFactory.1"</span><span class="keyword">);
<br />  </span><span class="default">$crapp </span><span class="keyword">= </span><span class="default">$ObjectFactory</span><span class="keyword">-&gt;</span><span class="default">CreateObject</span><span class="keyword">(</span><span class="string">"CrystalDesignRunTime.Application"</span><span class="keyword">);
<br />  </span><span class="default">$creport </span><span class="keyword">= </span><span class="default">$crapp</span><span class="keyword">-&gt;</span><span class="default">OpenReport</span><span class="keyword">(</span><span class="string">"//report1.rpt"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />
<br />   
<br />      </span><span class="default">$z</span><span class="keyword">= </span><span class="default">$creport</span><span class="keyword">-&gt;</span><span class="default">ParameterFields</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">)-&gt;</span><span class="default">SetCurrentValue</span><span class="keyword">(</span><span class="string">"Mango"</span><span class="keyword">);
<br />      </span><span class="default">$z</span><span class="keyword">= </span><span class="default">$creport</span><span class="keyword">-&gt;</span><span class="default">ParameterFields</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">)-&gt;</span><span class="default">SetCurrentValue</span><span class="keyword">(</span><span class="default">5000</span><span class="keyword">);
<br />
<br />  </span><span class="default">$creport</span><span class="keyword">-&gt;</span><span class="default">ExportOptions</span><span class="keyword">-&gt;</span><span class="default">DiskFileName</span><span class="keyword">=</span><span class="string">"reportin.pdf"</span><span class="keyword">;
<br />  </span><span class="default">$creport</span><span class="keyword">-&gt;</span><span class="default">ExportOptions</span><span class="keyword">-&gt;</span><span class="default">PDFExportAllPages</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;
<br />  </span><span class="default">$creport</span><span class="keyword">-&gt;</span><span class="default">ExportOptions</span><span class="keyword">-&gt;</span><span class="default">DestinationType</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;   </span><span class="default">$creport</span><span class="keyword">-&gt;</span><span class="default">ExportOptions</span><span class="keyword">-&gt;</span><span class="default">FormatType</span><span class="keyword">=</span><span class="default">31</span><span class="keyword">; 
<br />  </span><span class="default">$creport</span><span class="keyword">-&gt;</span><span class="default">Export</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);
<br />
<br /></span><span class="default">$len </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"reportin.pdf"</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: application/pdf"</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: </span><span class="default">$len</span><span class="string">"</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: inline; filename=reportin.pdf"</span><span class="keyword">); 
<br /></span><span class="default">readfile</span><span class="keyword">(</span><span class="string">"reportin.pdf"</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45996">  <div class="votes">
    <div id="Vu45996">
    <a href="/manual/vote-note.php?id=45996&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45996">
    <a href="/manual/vote-note.php?id=45996&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45996" title="50% like this...">
    0
    </div>
  </div>
  <a href="#45996" class="name">
  <strong class="user"><em>sorin dot andrei at mymail dot ro</em></strong></a><a class="genanchor" href="#45996"> &para;</a><div class="date" title="2004-09-25 02:24"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45996">
<div class="phpcode"><code><span class="html">[Editor's Note:
<br />Serializing the object, storing it and then (on the next page) unserializing it WILL work.
<br />End Note]
<br />
<br />the big problem for PHP is it can't save in session an COM object
<br />
<br />an samples code is here. This works just first time, then give the error:
<br />Call to undefined method com::Refresh() on line  $mMap-&gt;Refresh();
<br />the reson is he can't save the object $mMap in session
<br />
<br /><span class="default">&lt;?php
<br />    session_start</span><span class="keyword">();
<br />      if (isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'map'</span><span class="keyword">])) {
<br />            </span><span class="default">$mMap </span><span class="keyword">= </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'map'</span><span class="keyword">];
<br />        }
<br />        else
<br />        {
<br />        </span><span class="default">$ArcIMSConnector </span><span class="keyword">= new </span><span class="default">COM </span><span class="keyword">(</span><span class="string">"aims.ArcIMSConnector"</span><span class="keyword">)  or die(</span><span class="string">"can not create AIMS message object"</span><span class="keyword">);
<br />            echo </span><span class="string">"Loaded ArcIMSConnector, &lt;br&gt;"</span><span class="keyword">;
<br />            </span><span class="default">$ArcIMSConnector</span><span class="keyword">-&gt;</span><span class="default">ServerName </span><span class="keyword">= </span><span class="string">"map.sdsu.edu"</span><span class="keyword">;
<br />            </span><span class="default">$ArcIMSConnector</span><span class="keyword">-&gt;</span><span class="default">ServerPort </span><span class="keyword">= </span><span class="default">5300</span><span class="keyword">;
<br />
<br />            </span><span class="default">$mMap </span><span class="keyword">= new </span><span class="default">COM </span><span class="keyword">(</span><span class="string">"aims.Map"</span><span class="keyword">)  or die(</span><span class="string">"can not create aims.Map message object"</span><span class="keyword">);
<br />            echo </span><span class="string">"Loaded aims.Map, &lt;br&gt;"</span><span class="keyword">;
<br />            print </span><span class="string">"AIMS-ServerName= </span><span class="default">$ArcIMSConnector</span><span class="keyword">-&gt;</span><span class="default">ServerName</span><span class="string"> &lt;br&gt;"</span><span class="keyword">;
<br />
<br />            </span><span class="default">$resultInit</span><span class="keyword">= </span><span class="default">$mMap</span><span class="keyword">-&gt;</span><span class="default">InitMap</span><span class="keyword">(</span><span class="default">$ArcIMSConnector</span><span class="keyword">,</span><span class="string">"Worldgeography"</span><span class="keyword">);
<br />
<br />            </span><span class="default">$mMap</span><span class="keyword">-&gt;</span><span class="default">Width    </span><span class="keyword">= </span><span class="default">400</span><span class="keyword">;            </span><span class="comment">//                                'Width of the map in pixels
<br />            </span><span class="default">$mMap</span><span class="keyword">-&gt;</span><span class="default">Height   </span><span class="keyword">= </span><span class="default">300</span><span class="keyword">;            </span><span class="comment">//                                'Height of the map in pixels
<br />            </span><span class="default">$mMap</span><span class="keyword">-&gt;</span><span class="default">BackColor </span><span class="keyword">= </span><span class="default">15130848</span><span class="keyword">;
<br />            </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'map'</span><span class="keyword">] = </span><span class="default">$mMap</span><span class="keyword">;
<br />        }
<br />
<br />    </span><span class="default">$resultRefresh </span><span class="keyword">= </span><span class="default">$mMap</span><span class="keyword">-&gt;</span><span class="default">Refresh</span><span class="keyword">();                                </span><span class="comment">//Refresh the map
<br />    </span><span class="default">$urlImage      </span><span class="keyword">= </span><span class="default">$mMap</span><span class="keyword">-&gt;</span><span class="default">GetImageAsUrl</span><span class="keyword">();
<br />    print </span><span class="string">"&lt;br&gt;urlImage=</span><span class="default">$urlImage</span><span class="string">&lt;br&gt;"</span><span class="keyword">;
<br />
<br />    print </span><span class="string">"&lt;br&gt;&lt;IMG SRC='</span><span class="default">$urlImage</span><span class="string">'&gt;"</span><span class="keyword">;
<br />
<br /></span><span class="comment">/*
<br />    $ArcIMSConnector-&gt;Release();
<br />    $ArcIMSConnector = null;
<br />
<br />    $mMap-&gt;Release();
<br />    $mMap = null;
<br />*/
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37484">  <div class="votes">
    <div id="Vu37484">
    <a href="/manual/vote-note.php?id=37484&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37484">
    <a href="/manual/vote-note.php?id=37484&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37484" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37484" class="name">
  <strong class="user"><em>brana</em></strong></a><a class="genanchor" href="#37484"> &para;</a><div class="date" title="2003-11-17 05:17"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37484">
<div class="phpcode"><code><span class="html">How to send email via MAPI (works with Windows NT4, apache launched as a service)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">#New MAPI session...
<br /></span><span class="default">$session </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"MAPI.Session"</span><span class="keyword">);
<br />
<br /></span><span class="comment">#Login
<br /></span><span class="default">$strProfileInfo </span><span class="keyword">= </span><span class="string">"exchange_server" </span><span class="keyword">. </span><span class="default">chr</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">) . </span><span class="string">"exchange_user"</span><span class="keyword">;
<br /></span><span class="default">$session</span><span class="keyword">-&gt;</span><span class="default">Logon</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$strProfileInfo</span><span class="keyword">);
<br />            
<br /></span><span class="comment"># New message...
<br /></span><span class="default">$msg </span><span class="keyword">= </span><span class="default">$session</span><span class="keyword">-&gt;</span><span class="default">Outbox</span><span class="keyword">-&gt;</span><span class="default">Messages</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">();
<br /></span><span class="default">$msg</span><span class="keyword">-&gt;</span><span class="default">Subject </span><span class="keyword">= </span><span class="string">"Subject"</span><span class="keyword">;
<br /></span><span class="default">$msg</span><span class="keyword">-&gt;</span><span class="default">Text </span><span class="keyword">= </span><span class="string">"body"</span><span class="keyword">;
<br />        
<br /></span><span class="comment">#set recipients...
<br /></span><span class="default">$rcpts </span><span class="keyword">= </span><span class="default">$msg</span><span class="keyword">-&gt;</span><span class="default">Recipients</span><span class="keyword">;
<br /></span><span class="default">$rcpts</span><span class="keyword">-&gt;</span><span class="default">AddMultiple</span><span class="keyword">(</span><span class="string">"toto@toto.com"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);   </span><span class="comment">#To...
<br /></span><span class="default">$rcpts</span><span class="keyword">-&gt;</span><span class="default">AddMultiple</span><span class="keyword">(</span><span class="string">"titi@titi.com"</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);   </span><span class="comment">#Cc...
<br /></span><span class="default">$rcpts</span><span class="keyword">-&gt;</span><span class="default">AddMultiple</span><span class="keyword">(</span><span class="string">"tutu@tutu.com"</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);   </span><span class="comment">#Bcc...
<br />
<br /># Resolve senders
<br /></span><span class="default">$rcpts</span><span class="keyword">-&gt;</span><span class="default">Resolve</span><span class="keyword">();
<br />                
<br /></span><span class="comment">#Send message
<br /></span><span class="default">$msg</span><span class="keyword">-&gt;</span><span class="default">Send</span><span class="keyword">();    
<br />
<br /></span><span class="comment">#Logoff            
<br /></span><span class="default">$session</span><span class="keyword">-&gt;</span><span class="default">Logoff</span><span class="keyword">();    
<br />        
<br /></span><span class="comment">#Cleanup
<br /></span><span class="keyword">if(</span><span class="default">$msg</span><span class="keyword">!=</span><span class="default">null</span><span class="keyword">) {
<br />    </span><span class="default">$msg</span><span class="keyword">-&gt;</span><span class="default">Release</span><span class="keyword">();
<br />    </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />}        
<br />if(</span><span class="default">$session</span><span class="keyword">!=</span><span class="default">null</span><span class="keyword">) {
<br />    </span><span class="default">$session</span><span class="keyword">-&gt;</span><span class="default">Release</span><span class="keyword">();
<br />    </span><span class="default">$session </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />}                
<br /></span><span class="default">?&gt;
<br /></span>
<br />ps : NT account launching the service and exchange user must match !</span></code></div>
  </div>
 </div>
  <div class="note" id="29831">  <div class="votes">
    <div id="Vu29831">
    <a href="/manual/vote-note.php?id=29831&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29831">
    <a href="/manual/vote-note.php?id=29831&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29831" title="50% like this...">
    0
    </div>
  </div>
  <a href="#29831" class="name">
  <strong class="user"><em>richard dot quadling at carval dot co dot uk</em></strong></a><a class="genanchor" href="#29831"> &para;</a><div class="date" title="2003-02-26 05:51"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29831">
<div class="phpcode"><code><span class="html">With thanks to Harald Radi and Wez Furlong.<br /><br />Some VBA functions have optional parameters. Sometimes the parameters you want to pass are not consecutive.<br /><br />e.g.<br /><br />GoTo What:=wdGoToBookmark, Name="BookMarkName"<br />GoTo(wdGoToBookmark,,,"BookMarkName)<br /><br />In PHP, the "blank" parameters need to be empty.<br /><br />Which is ...<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Some servers may have an auto timeout, so take as long as you want.<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">// Show all errors, warnings and notices whilst developing.<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br /></span><span class="comment">// Used as a placeholder in certain COM functions where no parameter is required.<br /></span><span class="default">$empty </span><span class="keyword">= new </span><span class="default">VARIANT</span><span class="keyword">();<br /><br /></span><span class="comment">// Load the appropriate type library.<br /></span><span class="default">com_load_typelib</span><span class="keyword">(</span><span class="string">'Word.Application'</span><span class="keyword">);<br /><br /></span><span class="comment">// Create an object to use.<br /></span><span class="default">$word </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'word.application'</span><span class="keyword">) or die(</span><span class="string">'Unable to load Word'</span><span class="keyword">);<br />print </span><span class="string">"Loaded Word, version </span><span class="keyword">{</span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Version</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Open a new document with bookmarks of YourName and YourAge.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">-&gt;</span><span class="default">Open</span><span class="keyword">(</span><span class="string">'C:/Unfilled.DOC'</span><span class="keyword">);<br /><br /></span><span class="comment">// Fill in the information from the form.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">GoTo</span><span class="keyword">(</span><span class="default">wdGoToBookmark</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="string">'YourName'</span><span class="keyword">); </span><span class="comment">// Note use of wdGoToBookmark, from the typelibrary and the use of $empty.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">TypeText</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'YourName'</span><span class="keyword">]);<br /><br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">GoTo</span><span class="keyword">(</span><span class="default">wdGoToBookmark</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="default">$empty</span><span class="keyword">,</span><span class="string">'YourAge'</span><span class="keyword">);<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Selection</span><span class="keyword">-&gt;</span><span class="default">TypeText</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'YourAge'</span><span class="keyword">]);<br /><br /></span><span class="comment">// Save it, close word and finish.<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Documents</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">SaveAs</span><span class="keyword">(</span><span class="string">"C:/</span><span class="keyword">{</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'YourName'</span><span class="keyword">]}</span><span class="string">.doc"</span><span class="keyword">);<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">();<br /></span><span class="default">$word</span><span class="keyword">-&gt;</span><span class="default">Release</span><span class="keyword">();<br /></span><span class="default">$word </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />print </span><span class="string">"Word closed.\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />The example document is ...<br /><br />Hello [Bookmark of YourName], you are [Bookmark of YourAge] years old.<br /><br />and it would be called ...<br /><br />word.php?YourName=Richard%20Quadling&amp;YourAge=35<br /><br />Regards,<br /><br />Richard.</span></code></div>
  </div>
 </div>
  <div class="note" id="27574">  <div class="votes">
    <div id="Vu27574">
    <a href="/manual/vote-note.php?id=27574&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27574">
    <a href="/manual/vote-note.php?id=27574&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27574" title="50% like this...">
    0
    </div>
  </div>
  <a href="#27574" class="name">
  <strong class="user"><em>pchason at juno dot com</em></strong></a><a class="genanchor" href="#27574"> &para;</a><div class="date" title="2002-12-11 11:23"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27574">
<div class="phpcode"><code><span class="html">Searched for days on how to set up a multi-column html output grid that didn't use an array when creating an ADODB connection. Couldn't find one so I figured it out myself. Pretty simple. Wish I would have tried it myself sooner. Commented code with database connection is below...<br /><br />&lt;html&gt;<br />&lt;body&gt;<br />&lt;table&gt;<br /><span class="default">&lt;?php <br /></span><span class="comment">//create the database connection<br /></span><span class="default">$conn </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"ADODB.Connection"</span><span class="keyword">); <br /></span><span class="default">$dsn </span><span class="keyword">= </span><span class="string">"DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" </span><span class="keyword">. </span><span class="default">realpath</span><span class="keyword">(</span><span class="string">"mydb.mdb"</span><span class="keyword">); <br /></span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">Open</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">); <br /></span><span class="comment">//pull the data through SQL string<br /></span><span class="default">$rs </span><span class="keyword">= </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">Execute</span><span class="keyword">(</span><span class="string">"select clients from web"</span><span class="keyword">); <br /></span><span class="default">$clients </span><span class="keyword">= </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); <br /></span><span class="comment">//start the multicolumn data output<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$columns </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">; <br />while (!</span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">EOF</span><span class="keyword">){<br /></span><span class="comment">//if $i equals 0, start a row<br /></span><span class="keyword">if(</span><span class="default">$i </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">){ <br />echo </span><span class="string">"&lt;tr&gt;"</span><span class="keyword">; <br />}<br /></span><span class="comment">//then start writing the cells in the row, increase $i by one, and move to the next record<br /></span><span class="keyword">echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. </span><span class="default">$clients</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">. </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">; <br /></span><span class="default">$i</span><span class="keyword">++;<br /></span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">movenext</span><span class="keyword">();<br /></span><span class="comment">//once $i increments to equal $columns, end the row, <br />//and start the process over by setting $i to 0 <br /></span><span class="keyword">if(</span><span class="default">$i </span><span class="keyword">== </span><span class="default">$columns </span><span class="keyword">|| </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">EOF</span><span class="keyword">) { <br />echo </span><span class="string">"&lt;/tr&gt;"</span><span class="keyword">;<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    } <br />}<br /></span><span class="comment">//end multicolumn data output<br /><br />//close the ADO connections and release resources<br /></span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">(); <br /></span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">(); <br /></span><span class="default">$rs </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">; <br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">; </span><span class="default">?&gt;</span> <br />&lt;/table&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="24724">  <div class="votes">
    <div id="Vu24724">
    <a href="/manual/vote-note.php?id=24724&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24724">
    <a href="/manual/vote-note.php?id=24724&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24724" title="50% like this...">
    0
    </div>
  </div>
  <a href="#24724" class="name">
  <strong class="user"><em>dwt at myrealbox dot com</em></strong></a><a class="genanchor" href="#24724"> &para;</a><div class="date" title="2002-08-27 03:31"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24724">
<div class="phpcode"><code><span class="html">When first writing applications instancing COM objects I always faced the problem of the instanced program not terminating correctly although everything else worked fine. In fact the process had to be killed manually by using the task manager. When experimenting a bit I was able to isolate the cause for this peculiar behaviour to be illustrated by the sample code below:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//Accessing arrays by retrieving elements via function ArrayName(Index) works, but certainly is neither efficient nor good style<br /></span><span class="default">$excel</span><span class="keyword">=new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Excel.Application"</span><span class="keyword">);<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">sheetsinnewworkbook</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">();<br /><br /></span><span class="default">$book</span><span class="keyword">=</span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$sheet</span><span class="keyword">=</span><span class="default">$book</span><span class="keyword">-&gt;</span><span class="default">Worksheets</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$sheet</span><span class="keyword">-&gt;</span><span class="default">Name</span><span class="keyword">=</span><span class="string">"Debug-Test"</span><span class="keyword">;<br /></span><span class="default">$book</span><span class="keyword">-&gt;</span><span class="default">saveas</span><span class="keyword">(</span><span class="string">"C:\\debug.xls"</span><span class="keyword">);<br /><br /></span><span class="default">$book</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br />unset(</span><span class="default">$sheet</span><span class="keyword">);<br />unset(</span><span class="default">$book</span><span class="keyword">);<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">();<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">();<br />unset(</span><span class="default">$excel</span><span class="keyword">);<br /><br /></span><span class="comment">//Accessing arrays as usual (using the [] operator) works, buts leads to the application not being able to terminate by itself<br /></span><span class="default">$excel</span><span class="keyword">=new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Excel.Application"</span><span class="keyword">);<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">sheetsinnewworkbook</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">();<br /><br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">Worksheets</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">Name</span><span class="keyword">=</span><span class="string">"Debug-Test"</span><span class="keyword">;<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">saveas</span><span class="keyword">(</span><span class="string">"C:\\debug.xls"</span><span class="keyword">);<br /><br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">Close</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Workbooks</span><span class="keyword">-&gt;</span><span class="default">Close</span><span class="keyword">();<br /></span><span class="default">$excel</span><span class="keyword">-&gt;</span><span class="default">Quit</span><span class="keyword">();<br />unset(</span><span class="default">$excel</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The sample code performs the same action twice and each time the file is properly created. Yet for some mysterious reason the instanced excel process won't terminate once you've accessed an array the way most programmers (especially those who do a lot of oop in c++) do! Therefore until the PHP developers become aware of this problem we'll have to use the inefficient coding style illustrated in the first example.</span></code></div>
  </div>
 </div>
  <div class="note" id="30582">  <div class="votes">
    <div id="Vu30582">
    <a href="/manual/vote-note.php?id=30582&amp;page=ref.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30582">
    <a href="/manual/vote-note.php?id=30582&amp;page=ref.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30582" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#30582" class="name">
  <strong class="user"><em>php at racinghippo dot co dot uk</em></strong></a><a class="genanchor" href="#30582"> &para;</a><div class="date" title="2003-03-22 05:47"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30582">
<div class="phpcode"><code><span class="html">PASSING/RETURNING PARAMETERS BY REFERENCE<br />=========================================<br /><br />Some COM functions not only return values through the return value, but also act upon a variable passed to it as a parameter *By Reference*:<br /><br />RetVal = DoSomethingTo (myVariable)<br /><br />Simply sticking an '&amp;' in front of myVariable doesn't work - you need to pass it a variant of the correct type, as follows:<br /><br />  $myStringVariant = new VARIANT("over-write me", VT_BSTR);<br />  $result = $comobj-&gt;DoSomethingTo( &amp;$myStringVariant );<br /><br />The value in the variant can then be retrieved by:<br /><br />  $theActualValue = $myStringVariant-&gt;value;<br /><br />Other types of variant can be created as your needs demand - see the preceding section on the VARIANT type.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.com&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.com.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.com.php">COM</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.com.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="com.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="com.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="com.error-handling.php" title="Errors and error handling">Errors and error handling</a>
                        </li>
                                                <li class="">
                            <a href="com.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.com.php" title="com">com</a>
                        </li>
                                                <li class="">
                            <a href="class.dotnet.php" title="dotnet">dotnet</a>
                        </li>
                                                <li class="">
                            <a href="class.variant.php" title="variant">variant</a>
                        </li>
                                                <li class="">
                            <a href="class.compersisthelper.php" title="COMPersistHelper">COMPersistHelper</a>
                        </li>
                                                <li class="">
                            <a href="class.com-exception.php" title="com_&#8203;exception">com_&#8203;exception</a>
                        </li>
                                                <li class="">
                            <a href="class.com-safearray-proxy.php" title="com_&#8203;safearray_&#8203;proxy">com_&#8203;safearray_&#8203;proxy</a>
                        </li>
                                                <li class="current">
                            <a href="ref.com.php" title="COM Functions">COM Functions</a>
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
