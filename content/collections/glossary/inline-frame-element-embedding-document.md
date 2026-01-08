---
id: d1ba8284-25bb-45d0-8c98-8e03536c7a8c
blueprint: html
title: 'Iframe Element: Embedding Inline Frames'
teaser: 'The iframe HTML element is used to embed another HTML page within the current page, allowing for the integration of external content like videos, maps, or other web pages.'
reference_title:
  code: '<iframe>'
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
        text: '<iframe>'
      -
        type: text
        text: ' HTML element is used to embed another HTML document within the current document. It allows you to display external content, such as web pages, videos, or interactive media, directly within a webpage. This element is particularly useful for embedding content from other sources, such as YouTube videos, Google Maps, or other third-party services, without leaving the current page.'
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
        text: '<iframe>'
      -
        type: text
        text: ' element creates an inline frame that can display content from a separate URL. It is a block-level element but can be styled to behave as an inline element if needed. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<iframe>'
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
        text: '<iframe src="https://www.example.com" width="600" height="400" title="Example Website"></iframe>'
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
        text: '<iframe>'
  -
    type: set
    attrs:
      id: m0hf9vj7
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
              - src
              - 'Specifies the URL of the document to be embedded.'
          -
            cells:
              - width
              - 'Specifies the width of the iframe in pixels or percentage.'
          -
            cells:
              - height
              - 'Specifies the height of the iframe in pixels or percentage.'
          -
            cells:
              - title
              - "Provides a text description of the iframe's content, important for accessibility."
          -
            cells:
              - name
              - 'Assigns a name to the iframe, which can be used as a target for links or forms.'
          -
            cells:
              - sandbox
              - 'Applies extra restrictions to the content within the iframe for security purposes.'
          -
            cells:
              - allow
              - 'Specifies a list of features that the iframe is allowed to use (e.g., fullscreen).'
          -
            cells:
              - allowfullscreen
              - 'A Boolean attribute that allows the iframe to be displayed in fullscreen mode.'
          -
            cells:
              - loading
              - 'Indicates how the browser should load the iframe (`lazy` or eager).'
          -
            cells:
              - referrerpolicy
              - "Specifies the referrer policy for the iframe's requests."
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
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
                text: 'Embedding External Content'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<iframe>'
              -
                type: text
                text: ' element is ideal for embedding external resources, allowing users to view content from other sites without navigating away.'
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
                text: Security
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: sandbox
              -
                type: text
                text: ' attribute can enhance security by restricting what the embedded content can do, such as preventing scripts from running or blocking forms from being submitted.'
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
                text: Performance
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: loading
              -
                type: text
                text: ' attribute can improve page load times by deferring the loading of off-screen iframes with '
              -
                type: text
                marks:
                  -
                    type: code
                text: lazy
              -
                type: text
                text: ' loading.'
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
        text: '<iframe>'
      -
        type: text
        text: ' element is a versatile tool for embedding external content within a webpage. Its attributes offer flexibility for specifying dimensions, security restrictions, and loading behavior, making it an essential element for integrating third-party content seamlessly into web pages.'
link: 'https://html.spec.whatwg.org/multipage/embedded-content.html#the-iframe-element'
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
updated_at: 1743366240
seo_title: 'HTML Iframe Element: Inline Frame Embedding Explained'
seo_description: 'Explore the iframe HTML element for embedding external content within a webpage, enhancing interactivity and functionality.'
og_title: 'Understanding the HTML Iframe Element'
og_description: 'Learn how the iframe element in HTML is used to embed external pages and content within a webpage, providing dynamic and interactive features.'
date: '2025-03-30'
---
