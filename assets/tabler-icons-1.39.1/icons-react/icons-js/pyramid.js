import * as React from "react";

function IconPyramid({
  size = 24,
  color = "currentColor",
  stroke = 2,
  ...props
}) {
  return <svg className="icon icon-tabler icon-tabler-pyramid" width={size} height={size} viewBox="0 0 24 24" strokeWidth={stroke} stroke={color} fill="none" strokeLinecap="round" strokeLinejoin="round" {...props}><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 17l9 4l9 -4l-9 -14z" /><path d="M12 3v18" /></svg>;
}

export default IconPyramid;