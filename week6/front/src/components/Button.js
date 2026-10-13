export default function Button({ children, type = "button", onClick }) {
  return (
    <button
      type={type}
      onClick={onClick}
      className="h-9 rounded bg-[#4f80e8] px-4 text-sm font-bold text-white hover:opacity-90"
    >
      {children}
    </button>
  );
}