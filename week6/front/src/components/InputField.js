export default function InputField({ id, label, type = "text", value, onChange }) {
  return (
    <div className="mb-4">
      <label htmlFor={id} className="block text-sm font-bold text-black">
        {label}
      </label>
      <input
        id={id}
        type={type}
        value={value}
        onChange={onChange}
        className="mt-2 block h-9 w-full rounded bg-white px-3 shadow focus:outline-none focus:ring-2 focus:ring-[#4f80e8]"
      />
    </div>
  );
}