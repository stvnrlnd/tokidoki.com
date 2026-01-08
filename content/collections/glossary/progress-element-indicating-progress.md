---
id: 5b591643-4096-47f9-a5f3-9b91c3a3fe88
blueprint: html
title: 'Progress Element: Task Completion Indicator'
teaser: 'The progress HTML element is used to display the completion progress of a task, typically shown as a progress bar. It can represent both determinate progress, where the completion percentage is known, and indeterminate progress, where the completion is ongoing but the percentage is unknown.'
reference_title:
  code: '<progress>'
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
        text: '<progress>'
      -
        type: text
        text: ' HTML element is used to represent the completion progress of a task, such as a download or file upload, as a visual indicator. It is a self-contained, semantic element that provides a way to display the progress of a task to the user. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<progress>'
      -
        type: text
        text: ' element is part of the HTML5 specification and is often rendered as a progress bar by browsers.'
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
        text: '<progress>'
      -
        type: text
        text: ' element is typically used to show the progress of a task that has a known duration or completion status. It can display a numeric value indicating how much of the task has been completed relative to its total length. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<progress>'
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
          <label for="file">File Upload Progress:</label>
          <progress id="file" value="70" max="100">70%</progress>
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
        text: '<progress>'
  -
    type: set
    attrs:
      id: m0ii4nr1
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
              - value
              - 'Specifies how much of the task has been completed. This is a floating-point number between 0 and the max value.'
          -
            cells:
              - max
              - 'Defines the total length of the task. The default value is 1 if not specified.'
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
        text: '<progress>'
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
                text: 'Semantic Clarity'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<progress>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content represents the progress of a task, which is useful for both users and search engines.'
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
                text: 'User Feedback'
              -
                type: text
                text: ': By visually indicating task progress, the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<progress>'
              -
                type: text
                text: ' element provides immediate feedback to users, enhancing the user experience.'
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
                text: 'Styling Flexibility'
              -
                type: text
                text: ': The appearance of the progress bar can be customized using CSS to match the design of the webpage, though default styling varies across browsers.'
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
        text: '<progress>'
      -
        type: text
        text: ' element is a valuable tool for displaying the progress of tasks with a known duration. It provides semantic clarity and user feedback, making it an essential component for interactive web applications that involve tasks like downloads, uploads, or other processes requiring progress indication.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-progress-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: forms_and_input
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366538
seo_title: 'HTML Progress Element: Task Progress Indicator Explained'
seo_description: 'Explore the progress HTML element for displaying task completion progress, using attributes like value and max for determinate and indeterminate states.'
og_title: 'Understanding the HTML Progress Element'
og_description: 'Learn how the progress element in HTML is used to indicate task completion, with options for determinate and indeterminate progress bars, enhancing user feedback in web applications.'
date: '2025-03-30'
---
