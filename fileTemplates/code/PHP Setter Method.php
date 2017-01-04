/**
 * Set ${FIELD_NAME}
 *
 * @param ${TYPE_HINT} $${PARAM_NAME}
 *
 * @return $this
 */
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
    // TODO remove this line, intellij seems to have a bug with whitespace and file templates.

    return $this;
}