---
id: a894d15a-a541-4b3e-8532-ad081fe2401f
blueprint: html
title: 'Param Element: Defining Parameters for Objects'
teaser: 'The param HTML element is used to define parameters for plugins associated with an object element. It specifies name-value pairs that pass configuration settings to the embedded object, such as a media player or applet. However, the use of param is largely deprecated in modern web development.'
reference_title:
  code: '<param>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
      -
        type: text
        text: ' HTML element is used to define parameters for plugins that are associated with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<object>'
      -
        type: text
        text: ' element. This tag is used to pass initialization parameters to the embedded object, such as a plugin or multimedia content. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
      -
        type: text
        text: ' element is a void element, meaning it does not have a closing tag, and it must be placed within an '
      -
        type: text
        marks:
          -
            type: code
        text: '<object>'
      -
        type: text
        text: ' element.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
      -
        type: text
        text: ' element is used to specify parameters that configure the behavior of the embedded content within an '
      -
        type: text
        marks:
          -
            type: code
        text: '<object>'
      -
        type: text
        text: '. Each '
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
      -
        type: text
        text: ' element must have a '
      -
        type: text
        marks:
          -
            type: code
        text: name
      -
        type: text
        text: ' attribute to identify the parameter and a '
      -
        type: text
        marks:
          -
            type: code
        text: value
      -
        type: text
        text: " attribute to define the parameter's value. Here is an example of how the "
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <object data="movie.swf" type="application/x-shockwave-flash" width="400" height="300">
            <param name="autoplay" value="true">
            <param name="loop" value="false">
            <p>Your browser does not support Flash content. Please update your browser or install the Flash plugin.</p>
          </object>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
  -
    type: set
    attrs:
      id: m0ihnc5y
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - name
              - 'Specifies the name of the parameter.'
          -
            cells:
              - value
              - 'Specifies the value of the parameter.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: Considerations
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Deprecation
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<param>'
              -
                type: text
                text: ' element is considered obsolete in modern web development, as the use of plugins like Flash has significantly declined. HTML5 elements such as '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<video>'
              -
                type: text
                text: ' and '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<audio>'
              -
                type: text
                text: ' are preferred for embedding multimedia content.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Browser Support'
              -
                type: text
                text: ': While some browsers may still support the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<param>'
              -
                type: text
                text: ' element for backward compatibility, it is not recommended for use in new projects due to its deprecated status and the shift towards more modern web standards.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Fallback Content'
              -
                type: text
                text: ': It is important to provide fallback content within the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<object>'
              -
                type: text
                text: ' element to ensure that users who cannot view the embedded content still receive meaningful information or instructions.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<param>'
      -
        type: text
        text: ' element is used to pass parameters to plugins within an '
      -
        type: text
        marks:
          -
            type: code
        text: '<object>'
      -
        type: text
        text: ', but its use is largely outdated due to the decline of plugin-based web content. Modern web development practices favor native HTML5 elements for embedding multimedia, which offer better compatibility and security.'
link: 'https://html.spec.whatwg.org/multipage/embedded-content.html#the-param-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: embedded_content
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366505
seo_title: 'HTML Param Element: Object Parameters Explained'
seo_description: 'Explore the param HTML element for defining parameters within object elements, though its use is largely deprecated in modern HTML.'
og_title: 'Understanding the HTML Param Element'
og_description: 'Learn how the param element in HTML is used to specify parameters for object elements, though it is now generally deprecated in favor of more modern approaches.'
date: '2025-03-30'
---
